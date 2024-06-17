<?= $this->extend("layout/layout") ?>
<?= $this->section("content") ?>

<div class="text-center">
<!--Player Name-->

<h1 class="username">User: <?= esc($nickname) ?></h1> <!-- Displaying the player's nickname as a headline -->

<!--------->

<!--Score Table-->
<table class="table table-striped mx-auto text-center">
    <thead class="table-head">
        <tr>
            <th>Finished Time</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($scores as $score): ?>
            <tr>
                <td><?= esc($score->finished_time) ?></td>
                <td><?= esc($score->date_leaderboard) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!--------->

</div>
<?= $this->endSection() ?>
