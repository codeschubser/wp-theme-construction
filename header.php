<?php
/**
 * @package     Wordpress | Theme | Construction
 * @subpackage
 * @author      Codeschubser <blog@codeschubser.de>
 * @version     $Id: header.php,v 0.0.1 21.03.2014 10:03:51 Codeschubser Exp $;
 * @license     The MIT License (MIT)
 *
 *              Copyright (c) 2014 codeschubser
 *
 *              Permission is hereby granted, free of charge, to any person obtaining a copy of
 *              this software and associated documentation files (the "Software"), to deal in
 *              the Software without restriction, including without limitation the rights to
 *              use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *              the Software, and to permit persons to whom the Software is furnished to do so,
 *              subject to the following conditions:
 *
 *              The above copyright notice and this permission notice shall be included in all
 *              copies or substantial portions of the Software.
 *
 *              THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *              IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *              FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *              COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *              IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *              CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '-', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>