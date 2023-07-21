<div class="product-bottom-wrapper">
    <div class="product-quantity">
        <button class="q-minus">-</button>
        <input type="number" placeholder="0" min="1" value="2">
        <?php
        '<form class="cart" method="post" enctype="multipart/form-data" style="margin-top:;">';
        // '<div class="quantity">';
        // echo '<input type="number" step="01" min="1" name="quantity" value="1" class="input-text qty text" />';
        // '</div>';
        // '</form>';
        ?>
        <button class="q-plus">+</button>
    </div>
    <?php
    // echo '<form class="cart" method="post" enctype="multipart/form-data" style="margin-top:;">';
    echo '<button type="submit" name="add-to-cart" value="' . esc_attr(get_the_ID()) . '" class="button alt btn btn-primary btn-cart">Dodajte u košaricu</button>';
    echo '</form>';
    ?>
</div>