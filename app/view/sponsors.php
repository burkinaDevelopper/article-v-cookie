<div class="banner" onclick="redirectToAd()">
    <h4 style="color: black;margin:20px; font-weight:bold;font-size:20px">
        publicité</h4>
    <?php
    $url = 'http://playground.burotix.be/adv/banner_for_isfce.json';
    $json_data = file_get_contents($url);

    if ($json_data === false) {
        echo "Failed to fetch banner data.";
    } else {
        $data = json_decode($json_data, true);
        if ($data && isset($data['banner_4IPDW'])) {
            $banner = $data['banner_4IPDW'];
    ?>
            <img src="<?php echo $banner['image'] ?? ''; ?>" alt="Banner Image">
            <div class="banner-text"><?php echo $banner['text'] ?? ''; ?></div>
        <?php
        } else {

        ?>
            <div class="banner-text">Advertising</div>
    <?php
        }
    }
    ?>
</div>
<script>
    function redirectToAd() {
        <?php
        if ($data && isset($data['banner_4IPDW'])) {
            echo "window.open('{$banner['link']}', '_blank');";
        }
        ?>
    }
</script>