<?php
/*
Plugin Name: Tradervue Embed Trades
Description: Allows you to embed shared trades from Tradervue
Version: 1.1.1
Author: Tradervue
Author URI: http://www.tradervue.com
License: GPL2
*/

/*  Copyright 2013-2015 Tradervue  (email : support@tradervue.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// [trade id=12345]
function tv_trade_func($atts) {
    extract(shortcode_atts(array('id' => ''), $atts));
    return "<script src='http://www.tradervue.com/sharedt.js?id={$id}'></script>";
}

add_shortcode("trade", "tv_trade_func");
