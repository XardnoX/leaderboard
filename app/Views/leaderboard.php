<?php
$this->extend("layout/layout");
$this->section("content");
?>

<!--Search bar-->
<div class="text-center">
    <form action="<?= base_url('search') ?>" method="get">
        <button type="submit" class="src-button fa-solid fa-magnifying-glass" style="width: 30px; height: 30px;"></button>
        <input class="src-bar text-center" name="nickname" type="text" placeholder="Enter Username">
    </form>
</div>
<!--------->

<!--Table-->
<div class="container mt-5">
    <table class="table table-striped mx-auto text-center">
        <thead class="table-head">
            <tr>
                <th></th>
                <th>Username</th>
                <th>Time finished</th>
           </tr>
        </thead>
        <tbody>
            <?php $counter = 1; // Initialize a counter variable ?>
            <?php foreach ($leaderboard as $playerData): ?>
                <?php foreach ($playerData['scores'] as $score): ?>
                    <tr>
                        <td><?= esc($counter) ?></td> <!-- Display the counter instead of id_score -->
                        <td><?= esc($playerData['nickname']) ?></td>
                        <td><?= esc($score->finished_time) ?></td>
                    </tr>
                    <?php $counter++; // Increment the counter after each row ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!--------->

<?php
$this->endSection();
?>
