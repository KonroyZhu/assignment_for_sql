<?php
//������Ŀ��ļ�
include "phpqrcode/phpqrcode.php";
//���������
$errorLevel = "L";
//��������ͼƬ��Ⱥ͸߶�;Ĭ��Ϊ3
$size = "2";
//������������
$content="��ӭ����ͼ�������ϵͳ By ��� & ���";
//����QRcode��ľ�̬����png���ɶ�ά��ͼƬ//



echo QRcode::png($content, false, $errorLevel, $size);

?>