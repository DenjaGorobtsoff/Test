<?php

class ModelCatalogPartnership extends Model{
    public function addPartner($array){
        /*.DB_PREFIX.  - ����������� ���� � �������� ������� ���� ������� � ������ ������ ��� �������  ��_*/
        $sql = "INSERT INTO partner_offer
                SET name = '".$this->db->escape($array['name'])."',
                email ='".$this->db->escape($array['email'])."',
                age ='".(int) $array['age']."',
                company ='".$this->db->escape($array['company'])."',
                tax_type ='".$this->db->escape($array['tax_form'])."',
                comment ='".$this->db->escape($array['comment'])."'";

        //��������� �������������� ������

        $this->db->query($sql);
    }
}
