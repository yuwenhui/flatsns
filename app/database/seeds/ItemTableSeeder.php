<?php

class ItemTableSeeder extends DatabaseSeeder {
  public function run()
  {

    $list = array('Cubify Cube - 3D 打印机噢', 'bobble 水壶 - 手动挤一挤，让水不断经过', 'Vektor - 超薄望远镜', 'Broadlink Wi-Fi智能插座 - 智能家居必备', 'Philips The Airfryer - 用空气炸薯条', 'Withings Wifi 体重计 - 体重自动上传云端', 'GGMM iLight Bracket支架灯 - 多角度可', 'Play Video Memo - 录下你的留言', 'KOHLER Moxie - 蓝牙音箱淋浴喷头', 'Abrasus – Triangle Commuter Bag - 设', 'Herman Miller Embody - 12年才设计出', 'GoPro HERO3+ Black Edition - 运动拍');

    foreach ($list as $value)
    {
      Item::create(array(
        'id' => '',
        "title" => 'test',
        "content" => $value,
        'created_at' => '',
        'updated_at' => ''
      ));
    }
  }
}