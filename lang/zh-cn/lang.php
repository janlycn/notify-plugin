<?php

return [
    'plugin' => [
        'name' => '通知',
        'description' => '通知服务',
    ],
    'notifications' => [
        'menu_label' => '通知规则',
        'menu_description' => '管理触发通知的事件和操作。',
        'name' => '名称',
        'code' => '编码',
        'notification_rule' => '通知规则',
        'add_notification_rule' => '添加通知规则',
    ],
    'action' => [
        'tab' => '操作',
        'label' => '操作',
        'add_notification_action' => '添加通知操作',
        'available_tags_label' => '这些变量是可用的：',
        'available_tags_comment' => '单击或将这些内容拖到内容区域',
        'available_tags_empty' => '此操作不提供任何变量。',
        'related_object' => '相关对象',
        'attribute' => '属性',
        'operator' => '操作者',
        'value' => '值'
    ],
    'condition' => [
        'tab' => '条件',
        'label' => '条件',
        'delete_confirm' => '您真的要删除此条件吗？',
        'collapse_expand' => '折叠 / 展开',
        'delete_title' => '删除条件',
        'add_condition' => '添加条件',
        'select_placeholder' => '请选择一个条件'
    ],
    'setting' => [
        'tab' => '设置',
        'description_label' => '描述',
        'api_code' => 'api 编码',
        'is_enabled' => '激活'
    ],
    'permissions' => [
        'manage_notifications' => '通知管理',
    ],
];
