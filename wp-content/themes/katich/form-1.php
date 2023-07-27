<div class="hcf_box">
    <style scoped>
        .hcf_box {
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }

        .hcf_field {
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="left_heading">left_heading</label>
        <input type="text" id="left_heading" name="left_heading" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'left_heading', true)); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="left_text">left_text</label>
        <input type="text" id="left_text" name="left_text" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'left_text', true)); ?>">
    </p>

    <p class="meta-options hcf_field">
        <label for="right_heading">right_heading</label>
        <input type="text" id="right_heading" name="right_heading" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'right_heading', true)); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="right_text">right_text</label>
        <input type="text" id="right_text" name="right_text" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'right_text', true)); ?>">

        <label for="image_field">Image</label>
        <input type="file" id="image_field" name="image_field" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'image_field', true)); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="bottom_heading">bottom_heading</label>
        <input type="text" id="bottom_heading" name="bottom_heading" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_heading', true)); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="bottom_left">bottom_left</label>
        <input type="text" id="bottom_left" name="bottom_left" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_left', true)); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="bottom_right">bottom_right</label>
        <input type="text" id="bottom_right" name="bottom_right" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_right', true)); ?>">
    </p>
</div>