<?php

class ShoppingCartAPI {

    // Get all products from server by API
    // return an array of products
    static function getProducts() {

        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_URL => API_URL . "/catalog/products",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
                ),
            ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response)->data;
        }
    }


     // Get all categories from server by API
    // return an array of products
    static function getAllCategories()    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => API_URL . "/catalog/categories",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response)->data;
        }
    }

    // Create a cart by using API
    // @param $productId: Id of the product, $quantity: the amount of the product
    // return the cart
    static function CreateCart($productId, $quantity)    {

        $curl = curl_init();

        $jsonobj = array(
            "line_items" => array(
                array(
                    "quantity" => $quantity,
                    "product_id" => $productId
                )
            )
        );
        $jsonBody = json_encode($jsonobj);

        curl_setopt_array($curl, array(

            CURLOPT_URL => API_URL . "/carts",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonBody,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }

    // Get a cart by using API
    // @param $cartId: Id of the cart, $cartID = $carts->data->id;
    // return the cart
    static function GetCart($cartId) {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_URL => API_URL . "/carts" . "/" . $cartId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }

    // Delete a cart by using API
    // @param $cartId: Id of the cart, $cartID = $carts->data->id;
    // return the cart (should be null)
    static function deleteCart($cartId) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => API_URL . "/carts". "/" . $cartId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }

    // Add an item to the cart by using API
    // @param $cartId: Id of the cart, $productId: Id of the product, $quantity: the amount of the product
    // $cartID = $carts->data->id;
    // return the cart
    static function AddCartItem($cartId, $productId, $quantity) {

        $curl = curl_init();
        $jsonobj = array(
            "line_items" => array(
                array(
                    "quantity" => $quantity,
                    "product_id" => $productId
                )
            )
        );
        $jsonBody = json_encode($jsonobj);


        curl_setopt_array($curl, array(
            CURLOPT_URL => API_URL . "/carts". "/" . $cartId . "/items",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonBody,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }

    // Update an item to the cart by using API
    // @param $cartId: Id of the cart, $lineItemId: the item id for your cart, $productId: Id of the product, $quantity: the amount of the product
    // $lineItems = $contents->data->line_items->physical_items;
    // $lineItem1Id = $lineItem[0]->id; $lineItem2Id = $lineItem[1]->id; ...
    // return the cart
    static function updateItem($cartId, $lineItemId, $productId, $quantity) {

        $curl = curl_init();
        $jsonobj = array(
            "line_item" => array(
                "quantity" => $quantity,
                "product_id" => $productId,
            )
        );
        $jsonBody = json_encode($jsonobj);

        curl_setopt_array($curl, array(

            CURLOPT_URL => API_URL . "/carts". "/" . $cartId . "/items" . "/" . $lineItemId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonBody,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }

    // Delete an item in the cart by using API
    // @param $cartId: Id of the cart, $lineItemId: the item id for your cart
    // $lineItems = $contents->data->line_items->physical_items;
    // $lineItem1Id = $lineItem[0]->id; $lineItem2Id = $lineItem[1]->id; ...
    // return the cart, return null if empty
    static function deleteItem($cartId, $lineItemId) {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_URL => API_URL . "/carts". "/" . $cartId . "/items" . "/" . $lineItemId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
                "x-auth-client: " . API_CLIENT,
                "x-auth-token: " . API_TOKEN
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }
}
?>