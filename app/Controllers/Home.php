<?php

namespace App\Controllers;

use App\Models\Player as PModel;
use App\Models\Score as SModel;

class Home extends BaseController
{
    var $pModel;
    var $sModel;

    public function __construct() {
        $this->pModel = new PModel();
        $this->sModel = new SModel();
    }

    function leaderboard()
    {
        // Fetch all players
        $players = $this->pModel->findAll();
        
        // Prepare an array to hold all data
        $leaderboardData = [];

        foreach ($players as $player) {
            // Fetch scores for each player
            // Change here: replace `$player->id` with `$player->id_player`
            $scores = $this->sModel->where('player_id_player', $player->id_player)->orderBy("id_score", "asc")->findAll(100);
            
            // Append player data and scores to the leaderboard array
            $leaderboardData[] = [
                'nickname' => $player->nickname, // Assuming `nickname` is the correct field name
                'scores' => $scores
            ];
        }

        // Prepare data for the view
        $data = [
            'leaderboard' => $leaderboardData,
            'title' => "Leaderboard"
        ];

        // Load the view with the data
        return view("leaderboard", $data);
    }

    public function searchPlayer()
    {
        // Get the search term from query string or form
        $nickname = $this->request->getVar('nickname');

        // Find the player by nickname
        $player = $this->pModel->where('nickname', $nickname)->first();

        if (!$player) {
            return "No player found";
        }

        // Fetch scores for the found player
        $scores = $this->sModel->where('player_id_player', $player->id_player)->orderBy("finished_time", "asc")->findAll();

        // Prepare data for the view
        $data = [
            'nickname' => $player->nickname,
            'scores' => $scores,
            'title' => $player->nickname
        ];

        // Load a specific view to show the player stats
        return view("player", $data);
    }
}


