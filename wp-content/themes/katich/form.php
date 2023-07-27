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
        <label for="top_right">top-right</label>
        <textarea id="top_right"  name="top_right" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'top_right', true)); ?>"></textarea>
    </p>
    <p class="meta-options hcf_field">
        <label for="top_left">top-left</label>
        <textarea id="top_left" name="top_left" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'top_left', true)); ?>"></textarea>
    </p>
    <p class="meta-options hcf_field">
        <label for="bottom_right">bottom-right</label>
        <textarea id="bottom_right" name="bottom_right" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_right', true)); ?>"></textarea>
    </p>
    <p class="meta-options hcf_field">
        <label for="bottom_left">bottom-left</label>
        <textarea id="bottom_left" name="bottom_left" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_left', true)); ?>"></textarea>
    </p>
</div>

