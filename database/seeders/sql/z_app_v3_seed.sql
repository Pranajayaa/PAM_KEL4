INSERT INTO `users` VALUES (1, 'Administrator', 'administrator', 'administrator@app.com', NULL, '$2y$10$vuHvC85kY5J3179.y4JXVOBaqUfaHf.jXxiU8sbGLxKnpq0jBHTFK', NULL, NULL, NULL);

INSERT INTO `roles` VALUES (1, 'Administrator', 'web', '2021-06-25 05:47:42', '2021-06-25 05:47:42');

INSERT INTO `permissions` VALUES (1, 'role-list', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (2, 'role-create', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (3, 'role-edit', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (4, 'role-delete', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (5, 'role-show', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (9, 'user-list', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (10, 'user-create', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (11, 'user-edit', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (12, 'user-delete', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (13, 'user-show', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (14, 'content-list', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (15, 'content-create', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (16, 'content-edit', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (17, 'content-delete', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');
INSERT INTO `permissions` VALUES (18, 'content-show', 'web', '2020-10-25 10:42:04', '2020-10-25 10:42:04');


INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (13, 1);
INSERT INTO `role_has_permissions` VALUES (14, 1);
INSERT INTO `role_has_permissions` VALUES (15, 1);
INSERT INTO `role_has_permissions` VALUES (16, 1);
INSERT INTO `role_has_permissions` VALUES (17, 1);
INSERT INTO `role_has_permissions` VALUES (18, 1);


INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);

CREATE TABLE `content_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file_dir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
);

CREATE TABLE `contents`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_dir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `extra` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
);