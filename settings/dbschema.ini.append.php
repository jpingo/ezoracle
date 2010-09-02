<?php /*
[SchemaSettings]
SchemaPaths[oracle]=extension/ezoracle/ezdb/dbms-schema/ezoracleschema.php
SchemaHandlerClasses[oracle]=eZOracleSchema

[oracle]
ColumnNameTranslation[ezenumobjectvalue.contentobject_attribute_version]=contentobject_attr_version
ColumnNameTranslation[ezurl_object_link.contentobject_attribute_version]=contentobject_attr_version
ColumnNameTranslation[ezdbfile.size]=filesize

ColumnTypeTranslation[ezurlalias.source_url]=longtext;varchar(3000)
ColumnTypeTranslation[ezurl.url]=longtext;varchar(3000)
ColumnTypeTranslation[ezurlalias_ml.action]=longtext;varchar(3000)
ColumnTypeTranslation[ezurlalias_ml.text]=longtext;varchar(3000)
ColumnTypeTranslation[ezurlalias.destination_url]=longtext;varchar(3000)
ColumnTypeTranslation[ezcontentobject_tree.path_identification_string]=longtext;varchar(3100)
ColumnTypeTranslation[ezcontentobject_trash.path_identification_string]=longtext;varchar(3100)
ColumnTypeTranslation[ezimagefile.filepath]=longtext;varchar(3000)
ColumnTypeTranslation[eznotificationcollection.data_subject]=longtext;varchar(3100)
ColumnTypeTranslation[ezrss_import.url]=longtext;varchar(3100)
ColumnTypeTranslation[ezrss_import.import_description]=longtext;varchar(3100)
ColumnTypeTranslation[ezcontentclass.serialized_name_list]=longtext;varchar(3100)
ColumnTypeTranslation[ezcontentclass_attribute.serialized_name_list]=longtext;varchar(3100)
ColumnTypeTranslation[ezpending_actions.param]=longtext;varchar(3000)
ColumnTypeTranslation[ezcontentclass.serialized_description_list]=longtext;varchar(3000)

# Translation of column options, such as NOT NULL and DEFAULT xxx.
# Currently only "null" (remove "NOT NULL" requirement) is supported.
ColumnOptionTranslations[ezcontentobject_attribute.sort_key_string]=null
ColumnOptionTranslations[eznode_assignment.parent_remote_id]=null
ColumnOptionTranslations[ezsearch_object_word_link.identifier]=null
ColumnOptionTranslations[ezurlalias.source_url]=null
ColumnOptionTranslations[ezurlalias.destination_url]=null
ColumnOptionTranslations[ezurlalias_ml.text]=null
ColumnOptionTranslations[ezurlalias_ml.action]=null
ColumnOptionTranslations[eznotificationevent.data_text1]=null
ColumnOptionTranslations[eznotificationevent.data_text2]=null
ColumnOptionTranslations[eznotificationevent.data_text3]=null
ColumnOptionTranslations[eznotificationevent.data_text4]=null
ColumnOptionTranslations[ezuser.email]=null
ColumnOptionTranslations[ezuser.login]=null
ColumnOptionTranslations[ezuser_discountrule.name]=null
ColumnOptionTranslations[ezcontentclass.identifier]=null
ColumnOptionTranslations[ezcontentclass_attribute.identifier]=null
ColumnOptionTranslations[ezcontentclass_attribute.category]=null
ColumnOptionTranslations[ezworkflow_event.description]=null
ColumnOptionTranslations[ezcontentclass.remote_id]=null
ColumnOptionTranslations[ezcollab_group.path_string]=null
ColumnOptionTranslations[ezcollab_profile.data_text1]=null
ColumnOptionTranslations[ezcollab_item.data_text1]=null
ColumnOptionTranslations[ezcollab_item.data_text2]=null
ColumnOptionTranslations[ezcollab_item.data_text3]=null
ColumnOptionTranslations[ezgeneral_digest_user_settings.day]=null
ColumnOptionTranslations[ezgeneral_digest_user_settings.time]=null
ColumnOptionTranslations[ezproductcollection.currency_code]=null
ColumnOptionTranslations[ezmedia.filename]=null
ColumnOptionTranslations[ezmedia.original_filename]=null
ColumnOptionTranslations[ezmedia.mime_type]=null
ColumnOptionTranslations[ezrss_import.import_description]=null
ColumnOptionTranslations[ezisbn_registrant_range.registrant_from]=null
ColumnOptionTranslations[ezisbn_registrant_range.registrant_to]=null
ColumnOptionTranslations[ezsession.data]=null
ColumnOptionTranslations[ezcobj_state_group_language.description]=null
ColumnOptionTranslations[ezcobj_state_language.description]=null
ColumnOptionTranslations[ezsession.user_hash]=null
ColumnOptionTranslations[ezenumvalue.enumelement]=null
ColumnOptionTranslations[ezenumvalue.enumvalue]=null
ColumnOptionTranslations[ezenumobjectvalue.enumvalue]=null

IndexNameTranslation[ezcontentobject_attribute.ezcontentobject_attribute_contentobject_id]=ezco_attr_co_id
IndexNameTranslation[ezcontentobject_attribute.ezcontentobject_attribute_co_id_ver_lang_code]=ezco_attr_co_id_ver_lang_code
IndexNameTranslation[ezcontentobject_attribute.ezcontentobject_attribute_language_code]=ezco_attr_language_code
IndexNameTranslation[ezcontentobject_tree.ezcontentobject_tree_path_ident]=ezco_tree_path_ident
IndexNameTranslation[ezenumobjectvalue.ezenumobjectvalue_co_attr_id_co_attr_ver]=ezenov_co_attr_id_co_attr_ver
IndexNameTranslation[ezenumvalue.ezenumvalue_co_cl_attr_id_co_class_att_ver]=ezenv_coc_attr_id_coc_attr_ver
IndexNameTranslation[ezmodule_run.ezmodule_run_workflow_process_id_s]=ezmodule_run_wf_process_id_i
IndexNameTranslation[ezoperation_memento.ezoperation_memento_memento_key_main]=ezoperation_memento_mkey_main
IndexNameTranslation[ezproductcollection_item.ezproductcollection_item_contentobject_id]=ezproductcollection_item_co_id
IndexNameTranslation[ezproductcollection_item.ezproductcollection_item_productcollection_id]=ezpol_item_pcol_id
IndexNameTranslation[ezproductcollection_item_opt.ezproductcollection_item_opt_item_id]=ezpcol_item_opt_item_id
IndexNameTranslation[ezsearch_object_word_link.ezsearch_object_word_link_frequency]=ezsearch_object_word_l_freq
IndexNameTranslation[ezsearch_object_word_link.ezsearch_object_word_link_identifier]=ezsearch_object_word_l_ident
IndexNameTranslation[ezsearch_object_word_link.ezsearch_object_word_link_integer_value]=ezsearch_object_word_l_intval
IndexNameTranslation[ezsearch_object_word_link.ezsearch_object_word_link_object]=ezsearch_object_word_l_object
IndexNameTranslation[ezsearch_object_word_link.ezsearch_object_word_link_word]=ezsearch_object_word_l_word
IndexNameTranslation[ezsubtree_notification_rule.ezsubtree_notification_rule_user_id]=ezsubtree_notif_rule_user_id
IndexNameTranslation[ezwaituntildatevalue.ezwaituntildateevalue_wf_ev_id_wf_ver]=ezwaituntdateval_wfeid_wfever
IndexNameTranslation[ezgeneral_digest_user_settings.ezgeneral_digest_user_settings_address]=ezgen_digest_user_settings_add

*/ ?>