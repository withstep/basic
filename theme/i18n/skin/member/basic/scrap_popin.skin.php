<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 스크랩 시작 { -->
<div id="scrap_do" class="new_win mbskin">
    <h1 id="win_title"><?php echo __(theme_t886); ?></h1>

    <form name="f_scrap_popin" action="./scrap_popin_update.php" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption><?php echo __(theme_t887); ?></caption>
        <tbody>
        <tr>
            <th scope="row"><?php echo __(theme_t422); ?></th>
            <td><?php echo get_text(cut_str($write['wr_subject'], 255)) ?></td>
        </tr>
        <tr>
            <th scope="row"><label for="wr_content"><?php echo __(theme_t671); ?></label></th>
            <td><textarea name="wr_content" id="wr_content"></textarea></td>
        </tr>
        </tbody>
        </table>
    </div>

    <p class="win_desc">
        <?php echo __(theme_t888); ?>
    </p>

    <div class="win_btn">
        <input type="submit" value="<?php echo __(theme_t889); ?>" class="btn_submit">
    </div>
    </form>
</div>
<!-- } 스크랩 끝 -->
