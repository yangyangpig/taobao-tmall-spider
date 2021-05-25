<?php
/**
 * demo
 * Created by PhpStorm.
 * User: lapuad
 * Date: 2019/1/18
 * Time: 下午2:37
 */

require_once "../vendor/autoload.php";

use Spider\Taobao\TaobaoSpider;

$url = "https://item.taobao.com/item.htm?spm=a1z10.3-c-s.w4002-22892585014.9.2c8753abeHq4Py&id=616029202136";
// $url = 'https://item.taobao.com/item.htm?spm=a217h.9580640.831236.8.6b3225aax6Bxli&id=559965648710&scm=1007.12144.81309.69881_0_0&pvid=e9d0fb8e-0714-4fcc-b269-60c2d9f9338c&utparam=%7B%22x_hestia_source%22%3A%2269881%22%2C%22x_object_type%22%3A%22item%22%2C%22x_mt%22%3A8%2C%22x_src%22%3A%2269881%22%2C%22x_pos%22%3A2%2C%22x_pvid%22%3A%22e9d0fb8e-0714-4fcc-b269-60c2d9f9338c%22%2C%22x_object_id%22%3A559965648710%7D';
$info = TaobaoSpider::importGoods($url);
print_r($info);
