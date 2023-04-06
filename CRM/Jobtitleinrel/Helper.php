<?php

class CRM_Jobtitleinrel_Helper {
  public static function storeJobTitleInEmployerRelationship($contactId) {
    $sql = "
      update
        civicrm_relationship r
      inner JOIN
        civicrm_contact c ON r.`contact_id_a` = c.`id` AND r.`contact_id_b` = c.`employer_id` AND r.`relationship_type_id` = 5
      set
        r.description = c.job_title
      WHERE
        c.id = %1
      and
        r.`is_active` = 1
      and
        ifnull(r.end_date, '3000-01-01') > now()
    ";
    $sqlParams = [
      1 => [$contactId, 'Integer'],
    ];
    CRM_Core_DAO::executeQuery($sql, $sqlParams);
  }

  public static function addAll() {
    $sql = "
      update
        civicrm_relationship r
      inner JOIN
        civicrm_contact c ON r.`contact_id_a` = c.`id` AND r.`contact_id_b` = c.`employer_id` AND r.`relationship_type_id` = 5
      set
        r.description = c.job_title
      WHERE
        r.`is_active` = 1
      and
        ifnull(r.end_date, '3000-01-01') > now()
      and
        ifnull(r.description, '') = ''
      and
        c.job_title is not null
      and
        c.is_deleted = 0
    ";

    CRM_Core_DAO::executeQuery($sql);
  }
}
