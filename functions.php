function was_is_user_already_purchased()
{
    global $product;
    if (is_a($product, 'WC_Product')) {
        if (!is_user_logged_in()) return;
        if (wc_customer_bought_product('', get_current_user_id(), $product->get_id())) {
            return true;
        }
        return;
    }
    return;
}
