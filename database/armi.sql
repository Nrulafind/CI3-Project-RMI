CREATE TABLE `tbl_assessment` ( 
  `assessment_id` INT AUTO_INCREMENT NOT NULL,
  `corporate_name` VARCHAR(255) NULL,
  `user_name` VARCHAR(255) NULL,
  `created_at` DATE NULL,
  `code_laporan` VARCHAR(255) NULL,
  `skor` DECIMAL(10,2) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1 ,
  `rejectReason` VARCHAR(255) NULL,
  `approve_by` VARCHAR(255) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`assessment_id`)
);
CREATE TABLE `tbl_assessment_detail` ( 
  `id` INT AUTO_INCREMENT NOT NULL,
  `assessment_id` INT NOT NULL,
  `parameter_id` VARCHAR(11) NOT NULL,
  `phase_id` INT NOT NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`id`)
);
CREATE TABLE `tbl_dimensi` ( 
  `dimensi_id` VARCHAR(11) NOT NULL,
  `dimensi_name` VARCHAR(255) NULL,
  `category_id` INT NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`dimensi_id`)
);
CREATE TABLE `tbl_file_assessment` ( 
  `file_id` INT AUTO_INCREMENT NOT NULL,
  `assessment_id` INT NULL,
  `file_name` VARCHAR(255) NULL,
  `file_type` VARCHAR(50) NULL,
  `file_link` TEXT NULL,
  `file_size` TEXT NULL,
  `upload_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`file_id`)
);
CREATE TABLE `tbl_kategori` ( 
  `category_id` INT NOT NULL,
  `category_name` VARCHAR(255) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`category_id`)
);
CREATE TABLE `tbl_master_level` ( 
  `name` VARCHAR(250) NOT NULL,
  `start_value` DOUBLE NOT NULL,
  `end_value` DOUBLE NOT NULL,
  `id_master_level` INT AUTO_INCREMENT NOT NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`id_master_level`)
);
CREATE TABLE `tbl_parameter` ( 
  `parameter_id` VARCHAR(11) NOT NULL,
  `parameter_name` VARCHAR(255) NULL,
  `Weight` DECIMAL(5,2) NULL,
  `subdimensi_id` VARCHAR(11) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`parameter_id`)
);
CREATE TABLE `tbl_phase` ( 
  `phase_id` INT NOT NULL,
  `phase_name` VARCHAR(155) NULL,
  `phase_value` DECIMAL(5,2) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`phase_id`)
);
CREATE TABLE `tbl_question` ( 
  `question_id` VARCHAR(11) NOT NULL,
  `question` LONGTEXT NULL,
  `phase_id` INT NULL,
  `subdimensi_id` VARCHAR(11) NULL,
  `parameter_id` VARCHAR(11) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`question_id`)
);
CREATE TABLE `tbl_sub_dimensi` ( 
  `subdimensi_id` VARCHAR(11) NOT NULL,
  `subdimensi_name` VARCHAR(255) NULL,
  `dimensi_id` VARCHAR(11) NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`subdimensi_id`)
);
CREATE TABLE `tbl_user` ( 
  `user_id` INT AUTO_INCREMENT NOT NULL,
  `user_name` VARCHAR(50) NULL,
  `user_email` VARCHAR(50) NULL,
  `user_password` VARCHAR(300) NULL,
  `user_akses` INT NULL,
  `user_status` INT NULL,
  CONSTRAINT `PRIMARY` PRIMARY KEY (`user_id`)
);
CREATE INDEX `tbl_dimensi_ibfk_1` 
ON `tbl_dimensi` (
  `category_id` ASC
);
CREATE INDEX `fk_files_assessment` 
ON `tbl_file_assessment` (
  `assessment_id` ASC
);
CREATE INDEX `tbl_parameter_ibfk_1` 
ON `tbl_parameter` (
  `subdimensi_id` ASC
);
CREATE INDEX `tbl_question_ibfk_1` 
ON `tbl_question` (
  `subdimensi_id` ASC
);
CREATE INDEX `tbl_question_ibfk_2` 
ON `tbl_question` (
  `phase_id` ASC
);
CREATE INDEX `tbl_question_ibfk_3` 
ON `tbl_question` (
  `parameter_id` ASC
);
CREATE INDEX `tbl_sub_dimensi_ibfk_1` 
ON `tbl_sub_dimensi` (
  `dimensi_id` ASC
);
SET FOREIGN_KEY_CHECKS = 0;
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (666, 'TNT\'s Corp', 'Nurul', '2023-09-03', '001/TNT/09', '0.00', 2, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (999, 'Apple\'s Corp', 'Nunung Jayawardana', '2023-09-03', '002/RMI/2023', '0.00', 1, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1000, 'Microsoft\'S Corp', 'Nunung Jayawardana', '2023-09-03', '000/RMI/2023', '0.24', 4, 'yaa gitu', NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1002, 'APLOG', 'Nurul', '2023-12-13', '001/RMI/2023', '0.00', 3, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1003, 'Tiran', 'Nurul', '2023-12-06', '90/MFJ', '0.00', 3, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1004, 'Oliver Corp\'s', 'Nurul', '2023-12-07', '425/023', '0.00', 1, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1005, 'Geovani Corp', 'Nurul', '2023-12-14', '90/32/2023', '4.71', 1, NULL, NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1006, 'APLOG', 'Nurul', '2023-12-07', 'APL/12/20', '3.55', 4, 'masih ada yang belum sesuai pada dimensi C, periksa kembali', NULL);
INSERT INTO `tbl_assessment` (`assessment_id`, `corporate_name`, `user_name`, `created_at`, `code_laporan`, `skor`, `status`, `rejectReason`, `approve_by`) VALUES (1007, 'AP1', 'Nurul', '2023-12-08', '1234', '0.21', 2, NULL, NULL);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (3, 1002, 'A.1.1', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (7, 1002, 'A.2.2', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (8, 1002, 'A.2.3', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (9, 1002, 'B.1.4', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (10, 1002, 'B.1.5', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (13, 1003, 'A.1.1', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (14, 1004, 'A.2.2', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (15, 1004, 'A.1.1', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (16, 1004, 'C.2.27', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (17, 1004, 'D.3.38', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (25, 1005, 'A.1.1', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (26, 1005, 'A.2.2', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (27, 1005, 'A.2.3', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (28, 1005, 'B.1.4', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (29, 1005, 'C.1.20', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (30, 1005, 'E.2.42', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (31, 1005, 'E.1.41', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (32, 1005, 'B.1.5', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (33, 1005, 'B.2.10', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (34, 1005, 'B.2.11', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (35, 1005, 'B.2.12', 1);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (36, 1005, 'B.2.6', 1);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (37, 1005, 'B.2.7', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (38, 1005, 'B.2.8', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (39, 1005, 'B.2.9', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (40, 1005, 'B.3.13', 1);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (41, 1005, 'B.3.14', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (42, 1005, 'B.3.15', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (43, 1005, 'B.3.16', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (44, 1005, 'B.3.17', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (45, 1005, 'B.3.18', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (46, 1005, 'B.3.19', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (47, 1005, 'C.1.21', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (48, 1005, 'C.1.22', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (49, 1005, 'C.1.23', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (50, 1005, 'C.1.24', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (51, 1005, 'C.1.25', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (52, 1005, 'C.1.26', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (53, 1005, 'C.2.27', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (54, 1005, 'C.2.28', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (55, 1005, 'C.2.30', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (56, 1005, 'C.2.29', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (57, 1005, 'C.3.31', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (58, 1005, 'C.4.32', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (59, 1005, 'C.5.33', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (60, 1005, 'D.1.34', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (61, 1005, 'D.2.35', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (62, 1005, 'D.2.36', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (63, 1005, 'D.2.37', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (64, 1005, 'D.3.38', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (65, 1005, 'D.3.39', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (66, 1005, 'D.4.40', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (67, 1006, 'A.1.1', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (68, 1006, 'A.2.2', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (69, 1006, 'A.2.3', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (70, 1007, 'A.1.1', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (71, 1007, 'A.2.2', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (72, 1007, 'A.2.3', 1);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (73, 1007, 'B.1.4', 1);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (74, 1007, 'B.2.10', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (75, 1000, 'A.1.1', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (76, 1000, 'A.2.2', 5);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (77, 1006, 'B.1.4', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (78, 1006, 'B.2.10', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (79, 1006, 'B.2.11', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (80, 1006, 'B.1.5', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (81, 1006, 'B.2.12', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (82, 1006, 'B.2.6', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (83, 1006, 'B.2.7', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (84, 1006, 'B.2.8', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (85, 1006, 'B.2.9', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (86, 1006, 'E.1.41', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (87, 1006, 'E.2.42', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (88, 1006, 'D.4.40', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (89, 1006, 'C.1.21', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (90, 1006, 'B.3.13', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (91, 1006, 'B.3.14', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (92, 1006, 'B.3.15', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (93, 1006, 'B.3.16', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (94, 1006, 'B.3.17', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (95, 1006, 'B.3.18', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (96, 1006, 'C.1.22', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (97, 1006, 'C.1.23', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (98, 1006, 'B.3.19', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (99, 1006, 'C.1.20', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (100, 1006, 'C.1.24', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (101, 1006, 'C.2.27', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (102, 1006, 'C.1.25', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (103, 1006, 'C.1.26', 2);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (104, 1006, 'C.2.28', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (105, 1006, 'D.2.35', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (106, 1006, 'C.2.29', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (107, 1006, 'C.3.31', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (108, 1006, 'C.2.30', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (109, 1006, 'C.4.32', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (110, 1006, 'C.5.33', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (111, 1006, 'D.3.38', 4);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (112, 1006, 'D.1.34', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (113, 1006, 'D.3.39', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (114, 1006, 'D.2.37', 3);
INSERT INTO `tbl_assessment_detail` (`id`, `assessment_id`, `parameter_id`, `phase_id`) VALUES (115, 1006, 'D.2.36', 2);
INSERT INTO `tbl_dimensi` (`dimensi_id`, `dimensi_name`, `category_id`) VALUES ('A', 'Budaya dan Kapabilitas Risiko', 3);
INSERT INTO `tbl_dimensi` (`dimensi_id`, `dimensi_name`, `category_id`) VALUES ('B', 'Organisasi dan tata Kelola Risiko', 3);
INSERT INTO `tbl_dimensi` (`dimensi_id`, `dimensi_name`, `category_id`) VALUES ('C', 'Kerangka Risiko dan Kepatuhan', 3);
INSERT INTO `tbl_dimensi` (`dimensi_id`, `dimensi_name`, `category_id`) VALUES ('D', 'Proses dan kontrol risiko', 3);
INSERT INTO `tbl_dimensi` (`dimensi_id`, `dimensi_name`, `category_id`) VALUES ('E', 'Model, data, dan teknologi risiko', 3);
INSERT INTO `tbl_file_assessment` (`file_id`, `assessment_id`, `file_name`, `file_type`, `file_link`, `file_size`, `upload_at`) VALUES (1, 666, 'ForApprovedTnt', 'pdf', 'http://c:/ForApprovedTnt.pdf', '20', '2023-12-05 16:05:59');
INSERT INTO `tbl_kategori` (`category_id`, `category_name`) VALUES (1, 'Cluster Per-bank-an');
INSERT INTO `tbl_kategori` (`category_id`, `category_name`) VALUES (2, 'Cluster Asuransi');
INSERT INTO `tbl_kategori` (`category_id`, `category_name`) VALUES (3, 'Cluster Umum');
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Best Practice Phase', 4.8, 5, 1);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Strong Practice Phase AA', 4.4, 4.8, 2);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Strong Practice Phase A', 3.8, 4.4, 3);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Good Practice Phase AA', 3.4, 3.8, 4);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Good Practice Phase A', 2.8, 3.4, 5);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Emerging State AA', 2.4, 2.8, 6);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Emerging State A', 1.8, 2.4, 7);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Initial Phase AA', 1.4, 1.8, 8);
INSERT INTO `tbl_master_level` (`name`, `start_value`, `end_value`, `id_master_level`) VALUES ('Initial Phase A', 1, 1.4, 9);
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('A.1.1', 'Internalisasi budaya Risiko dalam budaya perusahaan', '0.33', 'A.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('A.2.2', 'Peran Penilaian RMI dalam Upaya Peningkatan Praktik Manajemen Risiko', '0.33', 'A.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('A.2.3', 'Program Peningkatan Keahlian Risiko', '0.33', 'A.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.1.4', 'Efektifitas Fungsi Pengelola Risiko', '0.06', 'B.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.1.5', 'Tingkat Kematangan Organ Pengelola Risiko', '0.06', 'B.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.10', 'Pengurusan aktif Direksi dalam Pengelolaan Risiko', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.11', 'Mandat, Wewenang, dan Independensi Fungsi Manajemen Risiko untuk Memantau semua Risiko', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.12', 'Efektivitas Fungsi Pengelola Risiko dalam menjalankan Tugasnya', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.6', 'Keterlibatan aktif Dewan Komisaris dalam Pengelolaan Risiko', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.7', 'Eskalasi Permasalahan kepada Dewan Komisaris', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.8', 'Tingkat Pemahaman Risiko di Jajaran Dewan Komisaris', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.2.9', 'Peran Komite dibawah Dewan Komisaris', '0.06', 'B.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.13', 'Penerapan Model Tata Kelola Risiko Tiga Lini', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.14', 'Peran dan Fungsi Lini Pertama', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.15', 'Peran dan fungsi Lini Kedua', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.16', 'Peran dan Fungsi Lini Ketiga', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.17', 'Interaksi antara fungsi Risiko dan Assurance (Kepatuhan, Legal, dan Audit)', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.18', 'Peran dan Fungsi Tata Kelola Risiko Terintegrasi', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('B.3.19', 'Monitoring Risiko entitas Induk sampai ke entitas anak', '0.06', 'B.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.20', 'Peningkatan Kualitas Kerangka Manajemen Risiko', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.21', 'Rencana Transformasi Enterprise Risk Management', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.22', 'Peran Manajemen Risiko dalam Penyusunan Rencana Strategis', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.23', 'Hubungan peran Manajemen Risiko terhadap pencapaian target Strategis RKAP', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.24', 'Kapasitas Risiko', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.25', 'Selera Risiko', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.1.26', 'Komunikasi Selera Risiko Kepada Pemangku Kepentingan Eksternal', '0.07', 'C.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.2.27', 'Kebijakan Risiko', '0.07', 'C.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.2.28', 'Prosedur Risiko', '0.07', 'C.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.2.29', 'Rencana darurat (Contigency Plan) dalam kondisi Terburuk (Worst Case Scenario)', '0.07', 'C.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.2.30', 'Reviu & Stress Test terhadap Prosedur dan SOP ', '0.07', 'C.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.3.31', 'Organ Fungsi Kepatuhan dan perannya', '0.07', 'C.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.4.32', 'Penerapan Kerangka Integrated ERM', '0.07', 'C.4');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('C.5.33', 'Efektifitas Pengendalian Internal', '0.07', 'C.5');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.1.34', 'Identifikasi Risiko Utama', '0.14', 'D.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.2.35', 'Pengukuran Risiko', '0.14', 'D.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.2.36', 'Kerangka proses pengukuran Risiko untuk Prioritisasi', '0.14', 'D.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.2.37', 'Agregasian atas seluruh Risiko Utama', '0.14', 'D.2');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.3.38', 'Aktivitas perlakuan terhadap Risiko Utama', '0.14', 'D.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.3.39', 'Proses Identifikasi dan Pengelolaan eksposur Risiko yang berada diatas selera Risiko', '0.14', 'D.3');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('D.4.40', 'Pelaporan Risiko Melaporkan secara Real-time', '0.14', 'D.4');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('E.1.41', 'Permodelan & Teknologi Risiko', '0.50', 'E.1');
INSERT INTO `tbl_parameter` (`parameter_id`, `parameter_name`, `Weight`, `subdimensi_id`) VALUES ('E.2.42', 'Data Risiko', '0.50', 'E.2');
INSERT INTO `tbl_phase` (`phase_id`, `phase_name`, `phase_value`) VALUES (1, 'Fase Awal (Initial Phase)', '1.00');
INSERT INTO `tbl_phase` (`phase_id`, `phase_name`, `phase_value`) VALUES (2, 'Fase Berkembang (Emerging State)', '2.00');
INSERT INTO `tbl_phase` (`phase_id`, `phase_name`, `phase_value`) VALUES (3, 'Fase Praktik yang Baik (Good Practice Phase)', '3.00');
INSERT INTO `tbl_phase` (`phase_id`, `phase_name`, `phase_value`) VALUES (4, 'Fase Praktik yang Lebih Baik (Strong Practice Phase)', '4.00');
INSERT INTO `tbl_phase` (`phase_id`, `phase_name`, `phase_value`) VALUES (5, 'Fase Praktik Terbaik (Best Practice Phase)', '5.00');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.1.1_1', '1. Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)
2. Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah', 1, 'A.1', 'A.1.1');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.1.1_2', '1. Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc
2. Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.
3. Balance scorecard
antara Risiko dan Unit Bisnis tidak berkaitan (Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan  yang bersumber dari operasional  BUMN sesuai target RKAP', 2, 'A.1', 'A.1.1');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.1.1_3', '1. Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).
2. Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut
3. Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 100-105% dari target RKAP', 3, 'A.1', 'A.1.1');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.1.1_4', '1. Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)
2. Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko
3. Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.
4. Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).
5. Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu >110% dari target RKAP', 4, 'A.1', 'A.1.1');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.1.1_5', '1.	Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),
2.	Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko
3.	Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial)
4.	Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)
5.	Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)
6.	Budaya risiko menjadi bagian integral dari budaya perusahaan (â€œini cara kerja kamiâ€). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
b.	Menyeimbangkan target jangka pendek dan risiko jangka panjang
c.	Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
d.	Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
e.	Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
f.	Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
g.	Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
h.	Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko
7.	Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
a.	Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
b.	Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan
8.	BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'A.1', 'A.1.1');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.2_1', '1. Belum ada penilaian Indeks Kematangan Risiko yang dilakukan secara formal
2. Namun, evaluasi kematangan manajemen risiko pernah dilakukan secara informal/ad- hoc oleh manajemen (misal taskforce/unit kerja khusus)
3. Penilaian masih bersifat high-level, kajian mendalam belum dilaksanakan', 1, 'A.2', 'A.2.2');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.2_2', '1. Telah ada penilaian Indeks Kematangan Risiko setidaknya dalam 3 tahun terakhir
2. Penilaian tidak dilakukan dengan periode yang sistematis (yaitu dilakukan secara ad-hoc)
3. Penilaian belum mencakup semua Dimensi risiko (misal budaya risiko, tata kelola risiko, kerangka Enterprise Risk
Management, kepatuhan risiko, proses dan kontrol risiko, serta teknologi  risiko)
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non keuangan yang bersumber dari
operasional BUMN sesuai target RKAP', 2, 'A.2', 'A.2.2');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.2_3', '1. Telah ada penilaian Indeks Kematangan Risiko
2. Penilaian dilakukan secara rutin (setiap tahun), setidaknya dilaksanakan untuk level Holding
3. Penilaian mencakup seluruh Dimensi utama risiko (misal budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management, kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko)
4. Telah ada rencana perbaikan berdasarkan hasil penilaian tingkat kematangan risiko,  namun langkah tindak lanjut  belum jelas (rencana masih  bersifat umum, pemilik inisiatif  belum ditunjuk, tata waktu belum didetailkan)
5. BUMN dengan skor maturitas  pada parameter ini telah menerapkan tata kelola risiko  yang dapat berpengaruh terCapaianya kinerja keuangan  & non-keuangan yang  BUMN yaitu 100-105% dari target RKAP', 3, 'A.2', 'A.2.2');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.2_4', '1. Telah ada penilaian Indeks Kematangan Risiko yang telah diformalisasikan ke dalam kebijakan risiko perusahaan
2. Penilaian dilakukan secara rutin (setiap tahun), dan telah dilaksanakan dengan baik di level Holding dan setiap anak perusahaan (jika relevan)
3. Penilaian mencakup seluruh Dimensi utama risiko (misal budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management, kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko)
4. Telah ada rencana perbaikan
berdasarkan hasil penilaian tingkat kematangan risiko dengan tindak lanjut yang jelas (terdapat inisiatif mendetail  dengan penanggung jawab, tata waktu implementasi terperinci)
5. Telah ada sosialisasi hasil penilaian  kepada manajemen (misal Direksi) yang   terdokumentasi dengan baik
6. BUMN dengan skor maturitas pada  parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan &  non-keuangan yang bersumber dari  operasional BUMN yaitu 105-110% dari  target RKAP', 4, 'A.2', 'A.2.2');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.2_5', '1.	Telah ada penilaian Indeks Kematangan Risiko yang telah diformalisasikan ke dalam kebijakan risiko perusahaan
2.	Penilaian dilakukan secara rutin (setiap tahun) dan telah dilaksanakan dengan baik di level Holding dan setiap anak perusahaan (jika relevan)
3.	Penilaian mencakup seluruh Dimensi utama risiko (misal budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management, kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko)
4.	Telah ada rencana perbaikan berdasarkan
hasil penilaian tingkat kematangan risiko dengan tindak lanjut yang jelas (terdapat
inisiatif mendetail dengan penanggung jawab, tata waktu implementasi terperinci)
5.	Metode penilaian risiko diperbarui secara periodik untuk mengimplementasikan praktik terbaik terkini (tidak ada budaya cepat merasa puas)
6.	Telah ada pemantauan progres implementasi rencana perbaikan, milestone/bukti dokumentasi penting tersimpan dan terdokumentasi
7.	Telah ada sosialisasi hasil penilaian dan pemantauan progres yang terdokumentasi dengan baik kepada manajemen (misal Direksi) serta pemangku kepentingan terkait (misal semua personel risiko manajemen, beserta personel Lini Pertama/Lini Ketiga terkait) untuk memperkuat kepemilikan kematangan risiko di antara semua pihak yang berkepentingan
8.	Telah dilakukan verifikasi/audit penilaian kematangan risiko oleh pihak independen (misal audit internal, atau tinjauan oleh pihak eksternal independen) sebagai â€œcheck-and-balanceâ€ untuk meminimalisir potensi bias dalam penilaian
9.	Telah ada bukti yang jelas atas kinerja implementasi Indeks Kematangan Risiko, di antaranya:
a.	Peningkatan nilai Indeks Kematangan Risiko secara year-on-year, baik di level Holding maupun anak perusahaan (jika relevan)
b.	Inisiatif dan rencana tindakan perbaikan dilaksanakan sepenuhnya (100%) selama periode pelaporan sesuai dengan peta jalan dan tata waktu yang telah disusun
10.	BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada
terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'A.2', 'A.2.2');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.3_1', '1. Telah ada program peningkatan keahlian risiko namun:
1) Program belum diterapkan ke seluruh pegawai (misal hanya dikhususkan untuk Dewan Komisaris) sehingga tingkat pelatihannya rendah (misal program pelatihan risiko hanya diberikan kepada kurang dari 1% total jumlah pegawai)
2) Program tidak bersifat wajib/rutin (misal hanya dilakukan secara ad- hoc)
3) Program pelatihan belum disesuaikan dengan tingkat keahlian pegawai', 1, 'A.2', 'A.2.3');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.3_2', '1. Telah ada program peningkatan keahlian risiko
2. Program dapat diakses oleh sebagian besar pegawai
3. Program disesuaikan dengan keahlian pegawai (yang memiliki akses ke pelatihan ini)
4. Topik yang dibahas dalam program kemungkinan belum komprehensif (misal belum mencakup seluruh pilar utama manajemen risiko seperti budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management, kepatuhan risiko, proses dan kontrol risiko, serta teknologi risiko)
5. Tingkat kehadiran pelatihan relatif tinggi di beberapa divisi saja (misal divisi Manajemen Risiko)
6. Program tidak bersifat wajib/rutin (misal hanya dilakukan secara ad-hoc)
7. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan  yang bersumber dari operasional  BUMN sesuai target RKAP', 2, 'A.2', 'A.2.3');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.3_3', '1. Telah ada program peningkatan keahlian risiko
2. Program dapat diakses oleh semua pegawai
3. Program disesuaikan dengan tingkat keahlian/jabatan, khususnya untuk personel risiko dan anggota Dewan Komisaris/Direksi
4. Topik program bersifat komprehensif (mencakup seluruh pilar Manajemen Risiko seperti budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management dan kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko (misal data, sistem, model)
5. Program bersifat wajib dan rutin (paling sedikit satu kali dalam setahun)
6. Program belum diperbarui secara rutin (misal tidak dilakukan tinjauan setiap tahunnya)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 100-105% dari target RKAP', 3, 'A.2', 'A.2.3');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.3_4', '1. Telah ada program peningkatan keahlian risiko
2. Program dapat diakses oleh semua pegawai
3. Program disesuaikan dengan tingkat keahlian/jabatan, khususnya untuk personel risiko dan anggota Dewan Komisaris/Direksi
4. Topik program bersifat komprehensif (mencakup seluruh pilar manajemen risiko seperti budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management dan kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko (misal data, sistem, model)
5. Program bersifat wajib dan rutin (paling sedikit satu kali dalam setahun)
6. Kurikulum ditinjau secara rutin dan formal berdasarkan kebutuhan pelatihan pegawai, serta melalui proses pembaruan setiap tahun untuk memastikan kualitasnya dan diperbarui agar sesuai dengan risiko-risiko utama dan praktik terbaik Manajemen Risiko (misal terus diperbarui dengan standar internasional terkini)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 105-110% dari target RKAP', 4, 'A.2', 'A.2.3');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('A.2.3_5', '1. Telah ada program peningkatan keahlian risiko
2. Program dapat diakses oleh semua pegawai
3. Program disesuaikan dengan tingkat keahlian/jabatan, khususnya untuk personel risiko dan anggota Dewan Komisaris/Direksi
4. Topik program bersifat komprehensif (mencakup seluruh pilar manajemen risiko seperti budaya risiko, tata kelola risiko, kerangka Enterprise Risk Management dan kepatuhan risiko, proses dan kontrol risiko, dan teknologi risiko (misal data, sistem, model)
5. Program bersifat wajib dan rutin (paling sedikit satu kali dalam setahun), dan telah diterapkan sanksi untuk ketidakhadiran
6. Kurikulum ditinjau secara rutin dan formal berdasarkan kebutuhan pelatihan pegawai, serta melalui proses pembaruan setiap tahun untuk memastikan kualitasnya dan diperbarui agar sesuai dengan risiko-risiko utama dan praktik terbaik Manajemen Risiko (misal terus diperbarui dengan standar internasional terkini)
7. Telah ada â€œfeedback-loopâ€/pengumpulan feedback terdokumentasi dari pegawai yang telah menerima pelatihan risiko, untuk menilai manfaat dari pelatihan risiko terhadap keahlian pegawai dalam menjalankan pekerjaannya, serta memberikan masukan untuk pengembangan program pelatihan secara berkesinambungan
8. Telah dilakukan analisis untuk menilai keberhasilan/ruang perbaikan program, termasuk area-area di mana pegawai belum menunjukkan kinerja yang baik dan membutuhkan pelatihan/tes lebih lanjut
pada siklus pelatihan berikutnya.                                                                                                                                             9. Perusahaan terus melakukan terobosan dalam pembelajaran melalui kolaborasi dengan penyedia program pelatihan Manajemen Risiko sesuai industri yang dijalankannya untuk mengedukasi pegawainya terkait praktik terbaik global Manajemen Risiko (khususnya untuk pegawai di jabatan Manajemen penting/personel Unit Bisnis dan divisi Manajemen Risiko)
10. Telah ada bukti yang jelas atas kinerja implementasi pelatihan risiko, di antaranya:
1) Penyelesaian penuh untuk pelatihan wajib terkait manajemen risiko/kesadaran risiko untuk semua pegawai
2) Penyelesaian penuh pelatihan risiko berdasarkan tingkat keahlian/jabatan untuk pegawai utama, terutama mereka yang memegang posisi manajerial di Lini Pertama, Kedua, dan Ketiga (kebutuhan/keluaran pelatihan terpenuhi)
3) Telah ada bukti sanksi yang diterapkan kepada pegawai yang tidak menyelesaikan program pelatihan terkait manajemen risiko yang telah diwajibkan
11. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN  yaitu >110% dari target RKAP', 5, 'A.2', 'A.2.3');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.4_1', '1. Belum ada fungsi risiko, namun telah ada beberapa pegawai yang diberi tugas yang berkaitan dengan risiko meskipun secara terdesentralisasi dan belum terstruktur
(misal terdapat manajer kontrol operasional yang memiliki ruang lingkup kerja yang berkaitan dengan risiko di Unit Bisnis)
2. Belum ada CRO (Direktur/Kepala Risiko), namun akuntabilitas untuk beberapa fungsi risiko telah dilaksanakan oleh pimpinan lain (misal kepala bidang Audit)', 1, 'B.1', 'B.1.4');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.4_2', '1.  Telah ada fungsi risiko terpusat berskala kecil, namun kegiatan Manajemen Risiko sebagian besar dilakukan secara terdesentralisasi (misal manajer risiko dan kegiatan Manajemen Risiko tersebar di setiap Unit Bisnis)
 2. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan  yang bersumber dari operasional  BUMN sesuai target RKAP', 2, 'B.1', 'B.1.4');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.4_3', '1. Telah ada fungsi risiko khusus dengan akuntabilitas perorangan dan cara interaksi yang jelas dengan fungsi kontrol maupun dengan Unit Bisnis
2. Telah ada Direktur yang bertanggung jawab atas risiko, yang dapat merangkap dengan fungsi lain (misal CFO).
3. Telah ada fungsi Manajemen Risiko dan kepatuhan independen sebagai Lini Kedua, dan menjalankan tugasnya untuk menyusun metodologi dan kebijakan Manajemen Risiko
4. Fungsi risiko (dengan dukungan dari fungsi kepatuhan) memiliki kewenangan untuk menjalankan tanggung jawab utamanya yaitu: Mengidentifikasi risiko; Mengukur risiko; Memonitor risiko; Mengontrol atau memitigasi risiko; Melaporkan paparan risiko
5. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 100-105% dari target RKAP', 3, 'B.1', 'B.1.4');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.4_4', '1. Telah ada fungsi risiko khusus dengan akuntabilitas perorangan dan cara interaksi yang jelas dengan fungsi kontrol maupun dengan Unit Bisnis
2. Telah ada Direktur yang bertanggung jawab atas risiko, yang dapat merangkap dengan fungsi lain (misal CFO).
3. Telah ada fungsi Manajemen Risiko dan
kepatuhan independen sebagai Lini Kedua, dan menjalankan tugasnya untuk menyusun metodologi dan kebijakan Manajemen Risiko
4. Fungsi risiko (dengan dukungan dari fungsi kepatuhan) memiliki kewenangan untuk menjalankan tanggung jawab utamanya yaitu: Mengidentifikasi risiko; Mengukur risiko; Memonitor risiko; Mengontrol atau memitigasi risiko; Melaporkan paparan risiko
5. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit)
6. Telah ada pimpinan khusus yang diformalisasikan (di tingkat manajemen) untuk setiap risiko utama (misal pimpinan khusus untuk risiko proyek, risiko strategis, risiko pasar, dll.) yang selaras antara penanggung jawab dan konteks bisnisnya
7. Akuntabilitas fungsi risiko dialokasikan kepada beberapa anggota Dewan Komisaris dan didukung dengan alur pelaporan yang jelas
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 105-110% dari target RKAP', 4, 'B.1', 'B.1.4');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.4_5', '1. Telah ada fungsi risiko khusus dengan akuntabilitas perorangan dan cara interaksi yang jelas dengan fungsi kontrol maupun dengan Unit Bisnis
2. Telah ada Direktur yang bertanggung jawab atas risiko, yang dapat merangkap dengan fungsi lain (misal CFO).
3. Telah ada fungsi Manajemen Risiko dan kepatuhan independen sebagai Lini Kedua, dan menjalankan tugasnya untuk menyusun metodologi dan kebijakan Manajemen Risiko
4. Fungsi risiko (dengan dukungan dari fungsi kepatuhan) memiliki kewenangan untuk menjalankan tanggung jawab utamanya yaitu: Mengidentifikasi risiko; Mengukur risiko; Memonitor risiko; Mengontrol atau memitigasi risiko; Melaporkan paparan risiko
5. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit)
6. Telah ada pimpinan khusus yang diformalisasikan (di tingkat manajemen) untuk setiap risiko utama (misal pimpinan khusus untuk risiko proyek, risiko strategis, risiko pasar, dll.) yang selaras antara penanggung jawab dan konteks bisnisnya.
7. Akuntabilitas fungsi risiko dialokasikan kepada beberapa anggota Dewan Komisaris dan didukung dengan alur pelaporan yang jelas
8. Struktur tata kelola risiko yang jelas untuk setiap Unit Bisnis di bawah payung Grup (struktur tata kelola disesuaikan untuk risiko-risiko khusus seperti risiko siber)
9. Keefektifan penerapan struktur tata kelola risiko ditinjau secara berkala (misal setiap tahun) oleh pihak independen (internal atau eksternal) dan ditingkatkan atau disesuaikan untuk mencerminkan konteks saat ini (misal jenis risiko utama yang ditangani, pertumbuhan/skala bisnis, strategi, dsb.)
10. Telah ada bukti yang jelas atas kinerja optimalisasi struktur tata kelola risiko, di antaranya: telah dilaksanakan penyesuaian berkala (misal setiap tahun) struktur organisasi risiko (beserta penunjukan yang jelas untuk pimpinan yang bertanggung
jawab atas risiko-risiko utama perusahaan) .                                                                                                                                                                                                                                                                                                                                                                                                                  11. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN  yaitu >110% dari target RKAP', 5, 'B.1', 'B.1.4');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.5_1', '1. Belum terpenuhinya kelengkapan organ pengelola risiko secara formal sesuai dengan klasifikasi risiko BUMN.
2. Belum ada fungsi risiko secara formal, namun telah dibentuk unit kerja/satuan khusus/pihak eksternal yang melakukan kegiatan berkaitan dengan manajemen risiko perusahaan (misal perencanaan pembentukan fungsi risiko)
3. BUMN belum memiliki proses formal untuk mengelola risiko yang dituangkan dalam kebijakan/ pedoman manajemen risiko.', 1, 'B.1', 'B.1.5');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.5_2', '1. Belum terpenuhinya kelengkapan organ pengelola risiko secara formal sesuai dengan klasifikasi risiko BUMN.
2. Telah ada fungsi risiko terpusat berskala kecil, namun kegiatan manajemen risiko sebagian besar dilakukan secara terdesentralisasi, misal:
1) Operasionalisasi kegiatan manajemen risiko berbeda berdasarkan Unit Bisnis, produk, wilayah, dan proses
2) Belum ada standar risiko transversal
3. BUMN belum memiliki proses formal untuk mengelola risiko yang dituangkan dalam kebijakan/ pedoman manajemen risiko.
4. Struktur tata kelola Manajemen Risiko dirancang untuk memenuhi kriteria minimum OJK
5. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan  yang bersumber dari operasional  BUMN sesuai target RKAP', 2, 'B.1', 'B.1.5');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.5_3', '1. Telah terpenuhinya kelengkapan organ pengelola risiko sesuai klasifikasi risiko BUMN namun fungsi, tugas, dan tanggung jawabnya belum sesuai dengan kebijakan manajemen risiko KBUMN (PER-2)
2. Telah ada fungsi manajemen risiko dan kepatuhan yang terpusat dan independen serta menjalankan tugasnya untuk menyusun metodologi dan kebijakan Manajemen Risiko untuk perusahaan induk
3. BUMN sudah memiliki proses formal untuk mengelola risiko yang dituangkan dalam kebijakan/ pedoman manajemen risiko.
4. Organisasi risiko juga mengelola risiko lainnya selain yang diprasyaratkan OJK, misalnya:
1) Model Risk: Unit internal khusus untuk mengelola risiko model
2) Cyber Risk: Pemantauan siber 24/7 terpusat (misal Security Operations Center)
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang
bersumber dari operasional BUMN  yaitu 100-105% dari target RKAP', 3, 'B.1', 'B.1.5');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.5_4', '1. Telah terpenuhinya kelengkapan organ pengelola risiko sesuai klasifikasi risiko BUMN namun fungsi, tugas, dan tanggung jawabnya belum sesuai dengan kebijakan manajemen risiko KBUMN (PER-2)
2. Telah ada fungsi manajemen risiko dan kepatuhan yang terpusat dan independen serta menjalankan tugasnya untuk menyusun metodologi dan
3. kebijakan Manajemen Risiko untuk perusahaan induk.
4. BUMN sudah memiliki proses formal untuk mengelola risiko yang dituangkan dalam kebijakan/ pedoman manajemen risiko.
5. Organisasi risiko juga mengelola risiko lainnya selain yang diprasyaratkan OJK, misalnya:
1) Model Risk: Unit internal khusus untuk mengelola risiko model
2) Cyber Risk: Pemantauan siber 24/7 terpusat (misal Security Operations Center)
3) Sustainability Risk: Unit internal khusus untuk mengelola risiko sustainability/keberlanjutan
6. Telah ada unit/sub-unit khusus untuk setiap risiko utama (misal pimpinan khusus untuk risiko proyek, risiko strategis, risiko pasar, dll.) yang selaras antara penanggung jawab dan konteks bisnisnya.
7. Struktur tata kelola risiko mungkin belum terdefinisikan dengan jelas di beberapa anak perusahaan                                                                                                                                                                                                                         8. Fungsi risiko memiliki keterampilan dalam pengendalian dan pemodelan risiko
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 105-110% dari target RKAP
', 4, 'B.1', 'B.1.5');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.1.5_5', '1. Telah terpenuhinya kelengkapan organ pengelola risiko sesuai klasifikasi risiko BUMN namun fungsi, tugas, dan tanggung jawabnya belum sesuai dengan kebijakan manajemen risiko KBUMN
2. Telah ada fungsi manajemen risiko dan kepatuhan yang terpusat dan independen sebagai Lini Kedua, dan menjalankan tugasnya untuk menyusun metodologi dan kebijakan Manajemen Risiko untuk perusahaan induk.
3. BUMN sudah memiliki proses formal untuk mengelola risiko yang dituangkan dalam kebijakan/ pedoman manajemen risiko.
4. Organisasi risiko juga mengelola risiko lainnya selain yang diprasyaratkan OJK, misalnya:
1) Model Risk: Unit internal khusus untuk mengelola risiko model
2) Cyber Risk: Pemantauan siber 24/7 terpusat (misal Security Operations Center)
3) Sustainability Risk: Unit internal khusus untuk mengelola risiko sustainability/keberlanjutan
5. Telah ada unit/sub-unit khusus untuk setiap risiko utama (misal pimpinan khusus untuk risiko proyek, risiko strategis, risiko pasar, dll.) yang selaras antara penanggung jawab dan konteks bisnisnya.
6. Struktur tata kelola risiko yang jelas untuk setiap Unit Bisnis di bawah payung Grup (struktur tata kelola disesuaikan untuk risiko-risiko khusus seperti risiko siber) dan untuk seluruh anak perusahaan
7. Fungsi risiko memiliki keterampilan dalam                                                                                                                                                                                                                                                                                                                                                                  8. Praktik terbaik tata kelola risiko diterapkan di induk dan semua anak perusahaan
9. Keefektifan penerapan struktur tata kelola risiko ditinjau secara berkala (misal setiap tahun) oleh pihak independen (internal atau eksternal), kemudian dilakukan penyesuaian atau peningkatan untuk mencerminkan konteks saat ini (misal jenis risiko utama yang ditangani, pertumbuhan/skala bisnis, strategi, dsb.)
10. Telah ada bukti yang jelas atas kinerja optimalisasi struktur tata kelola risiko, di antaranya: telah dilaksanakan penyesuaian berkala (misal setiap tahun) struktur organisasi risiko (beserta penunjukan yang jelas untuk pimpinan yang bertanggung jawab atas risiko-risiko utama perusahaan)
11. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN  yaitu >110% dari target RKAP
', 5, 'B.1', 'B.1.5');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.10_1', '1. Direksi belum terlibat secara aktif menyusun kebijakan dan strategi manajemen risiko secara komprehensif kemudian mengusulkan kebijakan dan strategi tersebut kepada Dewan Komisaris
2. Direksi belum terlibat secara aktif menyusun perencanaan Manajemen Risiko yang menjadi satu kesatuan dengan RKAP
3. Direksi belum terlibat aktif dalam menyusun dan menyampaikan laporan Manajemen Risiko.
4. Ruang lingkup keterlibatan Direksi dalam Manajemen Risiko belum tercantum pada kebijakan Manajemen Risiko, namun mungkin telah tercantum pada kebijakan lain (misal, piagam Direksi) meskipun lingkup keterlibatan yang dijelaskan masih kurang jelas/terlalu umum
5. Belum secara konsisten melaksanakan kebijakan Manajemen Risiko dalam menjalankan proses bisnis perusahaan
6. Direksi belum berperan aktif untuk mengembangkan budaya Manajemen Risiko
7. Kaji ulang untuk memastikan ketepatan kebijakan dan prosedur Manajemen Risiko serta penetapan batasan Risiko (risk limit) dan ambang batas (threshold) belum dilakukan secara berkala', 1, 'B.2', 'B.2.10');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.10_2', '1. Direksi ikut terlibat secara aktif menyusun kebijakan dan strategi manajemen risiko secara komprehensif kemudian mengusulkan kebijakan dan strategi tersebut kepada Dewan Komisaris
2. Direksi telah terlibat secara aktif menyusun perencanaan Manajemen Risiko yang
menjadi satu kesatuan dengan RKAP
3. Direksi telah terlibat aktif dalam menyusun dan menyampaikan laporan Manajemen Risiko.
4. Ruang lingkup keterlibatan Direksi dalam Manajemen
Risiko tercantum pada kebijakan Manajemen Risiko, namun belum menjelaskan tanggung jawab tertentu (misal hanya bersifat umum, pernyataan yang mencakup keseluruhan)
5. Telah secara konsisten melaksanakan kebijakan Manajemen Risiko dalam menjalankan proses bisnis perusahaan
6. Direksi belum berperan aktif untuk mengembangkan budaya Manajemen Risiko
7. Melaksanakan kaji ulang secara berkala untuk memastikan ketepatan kebijakan prosedur Manajemen Risiko serta penetapan batasan Risiko (risk limit) dan ambang batas (threshold) serta kecukupan implementasi sistem informasi Manajemen Risiko, serta memastikan implementasi metodologi penilaian Risiko;
8. Direksi telah memastikan bahwa fungsi Manajemen Risiko telah beroperasi secara independen;
9. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari kinerja perusahaan', 2, 'B.2', 'B.2.10');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.10_3', '1. Direksi ikut terlibat secara aktif menyusun kebijakan dan strategi manajemen risiko secara komprehensif kemudian mengusulkan kebijakan dan strategi tersebut kepada Dewan Komisaris
2. Direksi telah terlibat secara aktif menyusun perencanaan Manajemen Risiko yang menjadi satu kesatuan dengan RKAP
3. Direksi telah terlibat aktif dalam menyusun dan menyampaikan laporan Manajemen Risiko.
4. Telah ada ruang lingkup keterlibatan Direksi yang terdefinisi dengan baik dalam kebijakan Manajemen Risiko dan pedoman yang jelas dalam proses pengambilan keputusan untuk isu-isu risiko utama
5. Telah secara konsisten melaksanakan kebijakan Manajemen Risiko dalam menjalankan proses bisnis perusahaan
6. Direksi belum berperan aktif untuk mengembangkan budaya Manajemen Risiko
7. Melaksanakan kaji ulang secala berkala untuk memastikan ketepatan kebijakan prosedur Manajemen Risiko serta penetapan batasan Risiko (risk limit) dan ambang batas (threshold) serta terimplementasinya sistem informasi Manajemen Risiko
8. Direksi telah memastikan bahwa fungsi Manajemen Risiko telah beroperasi secara independen;
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'B.2', 'B.2.10');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.10_4', '1. Direksi ikut terlibat secara aktif menyusun kebijakan dan strategi manajemen risiko secara komprehensif kemudian mengusulkan kebijakan dan strategi tersebut kepada Dewan Komisaris
2. Direksi telah terlibat secara aktif menyusun perencanaan Manajemen Risiko yang
menjadi satu kesatuan dengan RKAP
3. Direksi telah terlibat aktif dalam menyusun dan menyampaikan laporan Manajemen Risiko.
4. Ruang lingkup keterlibatan Direksi dalam Manajemen Risiko dan pedoman pengambilan keputusan dalam permasalahan risiko utama dengan jelas tercantum pada kebijakan Manajemen Risiko
5. Telah secara konsisten melaksanakan kebijakan Manajemen Risiko dalam
menjalankan proses bisnis perusahaan â€¢ Direksi berperan aktif untuk mengembangkan budaya Manajemen Risiko
6. Melaksanakan kaji ulang secara berkala untuk memastikan Ketepatan kebijakan prosedur Manajemen Risiko serta penetapan batasan Risiko (risk limit) dan ambang batas (threshold); kecukupan implementasi sistem informasi Manajemen Risiko, serta memastikan keakuratan metodologi penilaian Risiko
7. Direksi telah memastikan bahwa fungsi Manajemen Risiko telah beroperasi secara independen;
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.10');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.10_5', '1. Direksi ikut terlibat secara aktif menyusun kebijakan dan strategi manajemen risiko secara komprehensif kemudian mengusulkan kebijakan dan strategi tersebut kepada Dewan Komisaris
2. Direksi telah terlibat secara aktif menyusun perencanaan Manajemen Risiko yang menjadi satu kesatuan dengan RKAP
3. Direksi telah terlibat aktif dalam menyusun dan menyampaikan laporan Manajemen Risiko.
4. Ruang lingkup keterlibatan Direksi dalam Manajemen Risiko dan pedoman pengambilan keputusan dalam permasalahan risiko utama dengan jelas tercantum pada kebijakan Manajemen Risiko
5. Telah secara konsisten melaksanakan kebijakan Manajemen Risiko dalam menjalankan proses bisnis perusahaanDireksi berperan aktif untuk mengembangkan budaya Manajemen Risiko
6. Melaksanakan kaji ulang secara berkala untuk memastikan Ketepatan kebijakan prosedur Manajemen Risiko serta penetapan batasan Risiko (risk limit) dan ambang batas (threshold); kecukupan implementasi sistem informasi Manajemen Risiko yang terintegrasi dengan sistem informasi lainnya, serta memastikan keakuratan metodologi penilaian Risiko;
7. Direksi telah memastikan bahwa fungsi Manajemen Risiko telah beroperasi secara independen;
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.10');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.11_1', '1. Telah ada mandat secara informal bagi beberapa pegawai/jajaran pimpinan utama untuk memantau risiko, namun belum dilaksanakan secara independen (misal pegawai yang ditunjuk untuk melakukan tugas pemantauan risiko di Unit Bisnis juga bertanggung jawab untuk penjualan)', 1, 'B.2', 'B.2.11');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.11_2', '1. Telah ada fungsi risiko terpusat, namun mungkin memiliki atau tidak memiliki mandat dan wewenang formal untuk menjalankan tanggung jawab intinya. Tanggung jawab inti hanya dilakukan di tingkat Unit Bisnis tanpa konsolidasian dan pandangan transversal
2. Fungsi risiko pusat bersifat independen hanya dalam struktur organisasi dan jalur pelaporan, namun dalam pelaksanaannya
3. Fungsi risiko mungkin tidak independen di semua tingkatan
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'B.2', 'B.2.11');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.11_3', '1. Fungsi risiko memiliki mandat dan kewenangan formal untuk menjalankan tanggung jawab intinya. Namun terdapat ambiguitas antara peran fungsi risiko pusat dengan fungsi risiko Unit Bisnis (misal beberapa sumber daya/pegawai bertugas di keduanya). Selain itu, terdapat ambiguitas terkait keputusan kontrol antara Risiko dan Unit Bisnis
2. Independensi dan kapabilitas staf Risiko dipastikan dengan pelatihan yang berkelanjutan, kapasitas yang memadai
3. Risiko sepenuhnya terintegrasi ke semua proses bisnis utama
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.2', 'B.2.11');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.11_4', '1. Mandat fungsi risiko didefinisikan dengan jelas dan tercantum dalam kerangka kebijakan dan dikomunikasikan ke seluruh perusahaan
2. Telah ada bukti bahwa perusahaan melakukan tinjauan secara berkala untuk memastikan apakah mandat, kerangka kerja, kebijakan/prosedur risiko yang diturunkan dari fungsi risiko pusat telah diimplementasikan dengan baik ke seluruh lini perusahaan (termasuk Unit Bisnis/anak perusahaan)
3. Fungsi risiko melapor ke Dewan Komisaris.
4. Telah ada pemisahan yang jelas antara peran fungsi risiko pusat dan fungsi risiko Unit Bisnis
5. Telah ada independensi organisasi antara fungsi risiko dan Unit Bisnis yang kegiatan dan eksposurnya ditinjau
6. Fungsi risiko (dengan dukungan dari fungsi kepatuhan) memiliki kewenangan untuk menjalankan tanggung jawab intinya: Mengidentifikasi risiko; Mengukur risiko; Memonitor risiko; Mengontrol atau memitigasi risiko; Melaporkan paparan risiko
7. Telah ada fungsi Risiko independen di setiap tingkatan Lini Kedua melakukan proses Assurance untuk semua jenis risiko
8. Fungsi Risiko menerima pelatihan khusus (contohnya risiko perubahan iklim, Advanced Analytics)
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.11');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.11_5', '1. Mandat fungsi risiko didefinisikan dengan jelas dan tercantum dalam kerangka kebijakan dan dikomunikasikan ke seluruh perusahaan
2. Telah ada bukti bahwa perusahaan melakukan tinjauan secara berkala (misal setiap tahun) apakah mandat, kerangka kerja, kebijakan/prosedur risiko yang diturunkan dari fungsi risiko pusat telah diimplementasikan dengan baik ke seluruh lini perusahaan (termasuk Unit Bisnis/anak perusahaan)
3. Fungsi risiko melapor ke Dewan Komisaris.
4. Telah ada pemisahan yang jelas antara peran fungsi risiko pusat dan fungsi risiko Unit Bisnis
5. Telah ada independensi organisasi antara fungsi risiko dan Unit Bisnis yang kegiatan dan eksposurnya ditinjau
6. Fungsi risiko (dengan dukungan dari fungsi kepatuhan) memiliki kewenangan untuk menjalankan tanggung jawab intinya:
1) Mengidentifikasi risiko
2) Mengukur risiko
3) Memonitor risiko
4) Mengontrol atau memitigasi risiko
5) Melaporkan paparan risiko
7. Fungsi risiko berperan lebih dengan bertindak sebagai thought partner untuk membahas masalah risiko dengan Unit Bisnis (misal Risiko terlibat dalam penyusunan keputusan-keputusan strategi bisnis penting). Unit Bisnis sepenuhnya menyepakati peran dan tanggung jawab jabatan tersebut
8. Fungsi Risiko bekerja sebagai mitra bagi Lini Pertama yang mampu memberikan masukan konstruktif kepada Unit Bisnis
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada
terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.11');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.12_1', '1. Penilaian risiko telah dilakukan, namun oleh pegawai/tim yang tidak secara khusus menangani manajemen risiko
2. Dilakukan penilaian risiko secara backward-looking, namun hanya dikhususkan untuk risiko khusus/kasus khusus tertentu (misal hanya risiko proyek saja)', 1, 'B.2', 'B.2.12');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.12_2', '1. Telah ada Manajer Risiko khusus dalam fungsi keuangan, audit atau kepatuhan (belum ada pemisahan peran yang jelas antara risiko dan fungsi perusahaan lainnya)
2. Dilakukan penilaian risiko secara backward-looking untuk membantu mengidentifikasi dan menilai risiko (tidak hanya risiko khusus/kasus khusus tertentu), namun penilaian masih tidak rutin dan dilakukan secara ad-hoc
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'B.2', 'B.2.12');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.12_3', '1. Telah ada tim sentral yang khusus berfokus pada strategi transversal dan terkonsolidasi (misal isu risiko yang beririsan antara Unit Bisnis dan/atau anak perusahaan)
2. Tim sentral memberikan standar dan pedoman Manajemen Risiko untuk perusahaan, namun masih sebagian besar difasilitasi oleh pihak eksternal (misal konsultan)
3. Dilakukan penilaian risiko secara backward-looking untuk membantu mengidentifikasi dan menilai risiko secara rutin dan mengikuti standar yang telah ditetapkan
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'B.2', 'B.2.12');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.12_4', '1. Telah ada tim sentral khusus yang didukung oleh berbagai inisiatif dari Unit Bisnis (misal risk ambassador di tingkat Unit Bisnis) yang memberikan komentar atau masukan secara efektif sebagai Lini Kedua
2. Tim sentral memberikan standar dan pedoman Manajemen Risiko untuk perusahaan secara independen, difasilitasi oleh pihak eksternal (misal konsultan) hanya untuk topik-topik khusus
3. Dilakukan penilaian risiko secara forward-looking dan memberikan wawasan mengenai proyeksi risiko ke depan untuk membantu mengidentifikasi dan menilai risiko secara rutin dan mengikuti standar yang telah ditetapkan, namun penilaian masih terlalu bergantung dengan tim sentral risiko (sedikit melibatkan Unit Bisnis)
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.12');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.12_5', '1. Telah ada tim sentral khusus dengan risk ambassador atau terdapat dukungan inisiatif risiko dari setiap Unit Bisnis yang memberikan komentar atau masukan secara efektif sebagai Lini Kedua bagi Unit Bisnis
2. Tim sentral memberikan standar dan pedoman Manajemen Risiko untuk perusahaan secara independen, difasilitasi oleh pihak eksternal (misal konsultan) hanya untuk topik-topik khusus
3. Dilakukan penilaian risiko secara forward- looking dan memberikan wawasan mengenai proyeksi risiko ke depan (misal secara kualitatif dan kuantitatif mengidentifikasi risiko-risiko utama yang akan dihadapi perusahaan di tahun berikutnya untuk setiap Unit Bisnis dan untuk perusahaan secara umum) secara rutin dan mengikuti standar yang telah ditetapkan
4. Penilaian risiko dengan efektif melibatkan Unit Bisnis sebagai Lini Pertama, sehingga proses tidak terlalu bergantung dengan tim sentral risiko (fungsi tim sentral risiko mampu menjalankan tugasnya dengan lebih efektif sebagai penilai risiko secara agregasi)
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.12');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.6_1', '1. Dewan Komisaris telah terlibat pada hal-hal yang berkaitan dengan kepatuhan terhadap regulasi, namun masih sedikit terlibat dalam isu-isu risiko lain
2. Ruang lingkup keterlibatan Dewan Komisaris dan Direksi dalam Manajemen Risiko belum tercantum pada kebijakan Manajemen Risiko, namun mungkin telah tercantum pada kebijakan lain (misal, piagam Dewan
3. Komisaris/piagam Dewan Direksi) meskipun lingkup keterlibatan yang dijelaskan masih kurang jelas/terlalu umum
4. Kriteria masalah yang dieskalasikan ke Dewan Komisaris belum didasarkan pada penilaian yang terstruktur dari Direksi (sehingga menyebabkan permasalahan yang berdampak/bernilai besar pernah terlambat atau bahkan tidak dieskalasikan)', 1, 'B.2', 'B.2.6');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.6_2', '1. Dewan Komisaris terlibat dalam isu-isu risiko ekstrem, namun belum ada ambang eskalasi yang jelas dari Direksi/Direktur Utama ke Dewan Komisaris
2. Ruang lingkup keterlibatan Dewan Komisaris dan Direksi dalam Manajemen Risiko tercantum pada kebijakan Manajemen Risiko, namun belum menjelaskan tanggung jawab tertentu (misal hanya bersifat umum, pernyataan yang mencakup keseluruhan)
3. Dewan Komisaris secara rutin menangani eskalasi permasalahan bernilai/berdampak besar, namun belum ada kriteria eskalasi yang jelas (memerlukan penilaian dari Direksi)
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan  yang bersumber dari operasional  BUMN sesuai target RKAP', 2, 'B.2', 'B.2.6');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.6_3', '1. Dewan Komisaris mengawasi kegiatan Manajemen Risiko yang bersifat regulatori dan dianggap krusial
2. Telah ada ruang lingkup keterlibatan Dewan Komisaris dan Direksi yang terdefinisi dengan baik dalam kebijakan Manajemen Risiko dan pedoman yang jelas dalam proses pengambilan keputusan untuk isu-isu risiko utama
3. Dewan Komisaris menyetujui sebagian, namun tidak semua, dari poin berikut:
4. Kebijakan untuk risiko, manajemen risiko, dan kepatuhan
1) Sistem kompensasi
2) Inventarisasi risiko
3) Kode etik yang menjelaskan perilaku yang tidak dapat diterima
4) Dewan Komisaris rutin terlibat pada permasalahan risiko utama selain untuk menyetujui rencana bisnis tahunan. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 100-105% dari target RKAP
', 3, 'B.2', 'B.2.6');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.6_4', '1. Dewan Komisaris mengawasi kegiatan Manajemen Risiko yang bersifat regulatori dan dianggap krusial
2. Ruang lingkup keterlibatan Dewan Komisaris dan Direksi dalam Manajemen Risiko dan pedoman pengambilan keputusan dalam permasalahan risiko utama dengan jelas tercantum pada kebijakan Manajemen Risiko
3. Dewan Komisaris menyetujui dan mengawasi implementasi:
1) Kebijakan untuk risiko, manajemen risiko, dan kepatuhan
2) Sistem kompensasi
3) Inventarisasi risiko
4) Kode etik yang menjelaskan perilaku yang tidak dapat diterima
4. Dewan Komisaris rutin terlibat pada permasalahan risiko utama selain untuk menyetujui rencana bisnis tahunan. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN  yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.6');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.6_5', '1. Dewan Komisaris mengawasi kegiatan Manajemen Risiko yang bersifat regulatori dan dianggap krusial
2. Ruang lingkup keterlibatan Dewan Komisaris dan Direksi dalam Manajemen Risiko dan pedoman pengambilan keputusan dalam permasalahan risiko utama dengan jelas tercantum pada kebijakan Manajemen Risiko
3. Dewan Komisaris menyetujui dan mengawasi implementasi:
1) Kebijakan untuk risiko, Manajemen Risiko, dan kepatuhan
2) Sistem kompensasi
3) Inventarisasi risiko
4) Kode etik yang menjelaskan perilaku yang tidak dapat diterima
4. Dewan Komisaris rutin terlibat pada permasalahan risiko utama selain untuk menyetujui rencana bisnis tahunan. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
5. Dewan Komisaris secara rutin terlibat dalam kegiatan sosialisasi risiko di perusahaan (penekanan secara top-down)
6. Dewan Komisaris efektif dalam mengarahkan Manajemen Risiko perusahaan ke arah yang konsisten dengan visi perusahaan, termasuk terlibat secara formal dalam penyusunan strategi risiko, rencana transformasi ERM, dan memastikan bahwa semua keputusan strategis yang diambil oleh perusahaan didukung oleh analisis risiko yang memadai
7. Telah ada bukti yang jelas atas kinerja keterlibatan aktif Dewan Komisaris, di antaranya:
8. Dewan Komisaris telah diikutsertakan dalam pengambilan keputusan untuk isu-isu yang membutuhkan eskalasi/persetujuan Dewan Komisaris dalam periode pelaporan (dengan merujuk ambang batas materialitas yang telah ditetapkan)
9. Dewan Komisaris telah mengambil peran sekurang-kurangnya dalam satu acara sosialisasi manajemen risiko perusahaan
10. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN  yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.6');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.7_1', '1. Sudah ada permasalahan berkaitan dengan risiko
dan kepatuhan yang dieskalasikan ke Dewan Komisaris (misal dalam hal menangani pemenuhan persyaratan minimum regulator) meskipun eskalasi tidak dilakukan secara rutin
2. Kriteria masalah yang dieskalasikan ke Dewan Komisaris belum didasarkan pada penilaian yang terstruktur dari Direksi (sehingga menyebabkan permasalahan yang berdampak/bernilai besar pernah terlambat atau bahkan tidak dieskalasikan)', 1, 'B.2', 'B.2.7');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.7_2', '1. Dewan Komisaris secara rutin menangani eskalasi permasalahan
bernilai/berdampak besar, namun belum ada kriteria eskalasi yang jelas (memerlukan penilaian dari Direksi)
2. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'B.2', 'B.2.7');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.7_3', '1. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang
perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
2. Telah ada dokumentasi yang menjelaskan kriteria permasalahan atau transaksi yang memerlukan persetujuan Dewan Komisaris, termasuk permasalahan dengan implikasi strategis yang signifikan, bukan hanya permasalahan bernilai/berdampak besar
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'B.2', 'B.2.7');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.7_4', '1. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
2. Telah ada dokumentasi yang menjelaskan kriteria permasalahan atau transaksi yang memerlukan persetujuan Dewan Komisaris, termasuk permasalahan dengan implikasi strategis yang signifikan, bukan hanya permasalahan berdampak/bernilai besar
3. Dewan Komisaris membuat keputusan independen dan berbasis fakta untuk permasalahan yang dieskalasikan, misal:
1) Telah ada bukti atau data yang dipresentasikan sebagai bahan pertimbangan Dewan Komisaris
2) Dewan Komisaris membuat keputusan berbasis fakta dan terdokumentasi dengan jelas (misal melalui recording, risalah rapat)
3) Dewan Komisaris mendasarkan keputusan dengan membandingkan bukti/fakta yang disajikan terhadap kerangka risiko yang telah disepakati (misal selera risiko, batas risiko)
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.7');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.7_5', '1. Telah ada ambang batas materialitas yang jelas dari isu-isu terkait risiko yang perlu dieskalasikan ke Dewan Komisaris dan diformalisasikan dalam kebijakan perusahaan
2. Telah ada dokumentasi yang menjelaskan kriteria permasalahan atau transaksi yang memerlukan persetujuan Dewan Komisaris, termasuk permasalahan dengan implikasi strategis yang signifikan, bukan hanya permasalahan bernilai/berdampak besar
3. Dewan Komisaris membuat keputusan independen dan berbasis fakta untuk permasalahan yang dieskalasikan, misal:
1) Telah ada bukti atau data yang dipresentasikan sebagai bahan pertimbangan Dewan Komisaris
2) Dewan Komisaris membuat keputusan berbasis fakta dan terdokumentasi dengan jelas (misal melalui recording, risalah rapat)
3) Dewan Komisaris mendasarkan keputusan dengan membandingkan bukti/fakta yang disajikan terhadap kerangka risiko yang telah disepakati (misal selera risiko, batas risiko)
4. Dewan Komisaris tidak menjadi penghambat, misal:
1) Telah ada bukti bahwa Dewan Komisaris merespons dengan cepat dan membuat keputusan tanpa menghabiskan waktu yang lama saat ada permasalahan yang dieskalasikan ke tingkat komite
2) Dewan Komisaris menyediakan waktu yang cukup untuk mengatasi masalah risiko yang dieskalasikan dengan bukti ketidakhadiran minim saat rapat Dewan Komisaris diadakan (terutama selama periode krisis)
5. Telah ada bukti yang jelas atas kinerja keterlibatan aktif Dewan Komisaris, di antaranya:
1) Dewan Komisaris telah diikutsertakan dalam pengambilan keputusan untuk isu-isu yang membutuhkan
eskalasi/persetujuan Dewan Komisaris dalam periode pelaporan (dengan merujuk ambang batas materialitas yang telah ditetapkan)
2) Bukti telah adanya fakta yang dipresentasikan kepada Dewan Komisaris, serta pengambilan keputusan yang jelas untuk isu-isu yang telah dieskalasikan
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.7');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.8_1', '1. Dewan Komisaris kompeten dalam hal bisnis dan manajemen, namun memiliki keahlian manajemen risiko yang masih dasar (misal belum ada Dewan Komisaris yang memiliki sertifikasi Manajemen Risiko atau memiliki pengalaman Manajemen Risiko di industrinya)
2. Belum ada rencana program pelatihan keahlian manajemen risiko bagi Dewan Komisaris, namun telah ada program yang pernah diikuti secara ad-hoc (misal beberapa anggota Dewan Komisaris pernah menghadiri forum eksekutif berkaitan dengan topik manajemen risiko)', 1, 'B.2', 'B.2.8');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.8_2', '1. Dewan Komisaris kompeten dalam hal bisnis dan manajemen, namun hanya sebagian kecil yang memiliki keahlian manajemen risiko (misal beberapa anggota memiliki sertifikasi Manajemen Risiko, atau memiliki pengalaman Manajemen Risiko di industrinya)
2. Rencana program pelatihan keahlian manajemen risiko bagi Dewan Komisaris telah disusun, namun belum dilaksanakan', 2, 'B.2', 'B.2.8');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.8_3', '1. Sebagian besar Dewan Komisaris memiliki keahlian manajemen risiko untuk secara efektif mengawasi strategi Manajemen Risiko (misal sebagian besar anggota Dewan Komisaris, audit, dan tata kelola terintegrasi memiliki Sertifikasi Manajemen Risiko seperti LSPP, BSMR, dan sebagainya)
2. Telah ada akses untuk program pelatihan manajemen risiko bagi Dewan Komisaris yang disesuaikan dengan topik-topik risiko saat ini.', 3, 'B.2', 'B.2.8');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.8_4', '1. Semua Dewan Komisaris memiliki keahlian manajemen risiko yang cukup untuk secara efektif mengawasi strategi Manajemen Risiko (misal semua anggota Dewan Komisaris telah mengikuti sertifikasi dasar Manajemen Risiko seperti LSPP, BSMR, dan sebagainya) dan paling sedikit terdapat satu anggota Dewan Komisaris yang memiliki pengalaman Manajemen Risiko di industrinya (misal sebelumnya menjabat sebagai pimpinan bidang Manajemen Risiko)
2. Telah ada akses program pelatihan yang bersifat wajib, yang disesuaikan dengan topik-topik risiko saat ini.', 4, 'B.2', 'B.2.8');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.8_5', 'Dewan Komisaris memiliki keahlian dan kapabilitas manajemen risiko yang sangat tinggi untuk secara efektif mengawasi strategi Manajemen Risiko:
1. Semua Dewan Komisaris memiliki keahlian dan kapabilitas risiko yang cukup untuk secara efektif mengawasi strategi Manajemen Risiko (misal semua anggota Dewan Komisaris telah mengikuti sertifikasi dasar Manajemen Risiko seperti LSPP, BSMR, dan sebagainya) dan paling sedikit terdapat satu anggota Dewan Komisaris yang memiliki pengalaman Manajemen Risiko di industrinya (misal sebelumnya menjabat sebagai pimpinan bidang Manajemen Risiko)
2. Lebih dari satu anggota Dewan Komisaris yang memiliki pengalaman industri di bidang manajemen risiko dan mampu melihat potensi-potensi risiko
3. Anggota Dewan Komisaris yang memiliki keahlian Manajemen Risiko ditugaskan di komite yang tepat (misal anggota yang sangat berpengalaman ditunjuk menjadi kepala komite risiko Dewan Komisaris)
4. Telah ada akses program pelatihan yang disesuaikan dengan topik-topik edukasi risiko saat ini, seperti:
1) Pelatihan dan sertifikasi tentang dasar- dasar/prinsip manajemen risiko
2) Forum manajemen risiko dengan eksekutif industri lainnya
3) Materi tentang risiko berwawasan ke depan
4) Materi tentang perspektif global manajemen risiko
5. Anggota Dewan Komisaris berasal dari berbagai latar belakang dan bersifat independen yang membantu memberikan perspektif independen
6. Telah ada komite risiko di bawah Dewan Komisaris untuk mengelola Manajemen Risiko di perusahaan
7. Telah ada bukti yang jelas atas kinerja pelatihan untuk Dewan Komisaris, di antaranya:
1) Penyelesaian penuh program pelatihan risiko untuk Dewan Komisaris yang telah direncanakan dalam periode pelaporan
2) Adanya pemertahanan/perbaikan secara year-on-year untuk level keahlian risiko Dewan Komisaris (misal melalui sertifikasi), termasuk partisipasi Dewan Komisaris dalam program refresher
', 5, 'B.2', 'B.2.8');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.9_1', '1. Belum ada komite risiko di tingkat Dewan Komisaris, namun telah ada setidaknya 1 (satu) anggota Dewan Komisaris yang bertanggung jawab atas hal-hal yang berkaitan dengan Manajemen Risiko', 1, 'B.2', 'B.2.9');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.9_2', '1. Telah ada subkomite di tingkat Dewan Komisaris untuk mengelola hal-hal yang berkaitan dengan Manajemen Risiko, namun komite ini tidak dikhususkan untuk mengawasi topik Manajemen Risiko di perusahaan; permasalahan risiko kritis dikelola oleh Dewan Komisaris secara keseluruhan, tidak ditangani oleh komite khusus
2. BUMN dengan skor maturitas pada parameter ini belum
optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'B.2', 'B.2.9');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.9_3', '1. Telah ada subkomite risiko di tingkat Dewan Komisaris untuk mengelola topik Manajemen Risiko di perusahaan
1) Komite risiko bekerja secara independen terpisah dari Komite Dewan Komisaris lainnya
2) Tanggung jawab dari setiap komite belum jelas (khususnya dalam permasalahan yang berkaitan dengan strategi)
2. Rapat komite risiko Dewan Komisaris sering kali difokuskan untuk memberikan informasi terkini kepada anggota komite Dewan Komisaris ("komunikasi satu arahâ€)
3. Komite risiko Dewan Komisaris dilibatkan setidaknya dua kali dalam setahun untuk rapat komite risiko
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'B.2', 'B.2.9');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.9_4', '1. Lebih dari satu subkomite khusus tingkat Dewan Komisaris (sekurang-kurangnya komite audit, komite risiko, dan komite tata kelola terintegrasi) dengan tanggung jawab yang jelas:
1) Komite risiko bekerja secara independen terpisah dari Komite Dewan Komisaris lainnya
2) Komite risiko memiliki anggota dari manajemen senior dan tim risiko
2. Adanya tim Audit Khusus, yang bertanggung jawab mengawasi dan terus memonitor risiko-risiko yang berkembang (misal IT audit) untuk mendukung upaya Dewan Komisaris dalam melakukan pengawasan
3. Rapat komite risiko Dewan Komisaris memiliki bukti yang jelas bahwa anggota komite Dewan Komisaris berperan aktif
dalam memberikan pengawasan, tantangan, dan arahan yang dapat ditindaklanjuti/langkah selanjutnya terhadap isu-isu risiko yang dieskalasi ("diskusi dua arahâ€)
4. Komite risiko Dewan Komisaris dilibatkan setiap tiga bulan untuk mengikuti rapat komite risiko
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.2', 'B.2.9');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.2.9_5', '1. Lebih dari satu subkomite khusus tingkat Dewan Komisaris (sekurang-kurangnya komite audit, komite risiko, dan komite tata kelola terintegrasi) dengan tanggung jawab yang jelas:
1) Komite risiko bekerja secara independen terpisah dari Komite Dewan Komisaris lainnya
2) Komite risiko memiliki anggota dari manajemen senior dan tim risiko
2. Setiap risiko utama organisasi dialokasikan kepada setidaknya 1 sub-komite Dewan Komisaris yang bertanggung jawab atau seluruh Dewan Komisaris
3. Adanya tim Audit Khusus, yang bertanggung jawab mengawasi dan terus memonitor risiko-risiko yang berkembang (misal IT audit) untuk mendukung upaya Dewan Komisaris dalam melakukan
pengawasan                                                                                                                                                                                                                                                                                                                                                                                             4. Telah ada bukti bahwa komite berinteraksi dengan manajemen secara proaktif (tidak menunggu diminta), terutama pada periode di mana terdapat peningkatan potensi terjadinya peristiwa risiko kritis
5. Rapat komite risiko Dewan Komisaris memiliki bukti yang jelas bahwa anggota komite Dewan Komisaris berperan aktif dalam memberikan pengawasan, tantangan, dan arahan yang dapat ditindaklanjuti/langkah selanjutnya terhadap isu-isu risiko yang dieskalasi ("diskusi dua arahâ€)
6. Komite risiko Dewan Komisaris dilibatkan lebih sering dari tiga bulan sekali untuk mengikuti rapat komite risiko
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.2', 'B.2.9');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.13_1', '1. Belum ada definisi Model Tata Kelola Risiko Tiga Lini, namun terdapat konsep informal Model
Tata Kelola Risiko TigaLini yang belum sepenuhnya diformalkan dalam struktur organisasi (misal tidak didokumentasikan dalam bentuk kebijakan perusahaan)
', 1, 'B.3', 'B.3.13');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.13_2', '1. Telah ada konsep Model Tata Kelola Risiko Tiga Lini dan diformalkan dalam struktur organisasi perusahaan (misal
didokumentasikan dalambentuk kebijakan perusahaan), namun masih ada tumpang tindih peran dan tanggung jawab pada jabatan tersebut
2. Belum ada tanggung jawab risiko yang jelas dari Unit Bisnis sebagai Lini Pertama, masih sangat bergantung pada Lini Kedua dan Lini Ketiga untuk mengelola risiko
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'B.3', 'B.3.13');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.13_3', '1. Telah ada Model Tata Kelola Risiko Tiga Lini, dengan peran dan tanggung jawab yang jelas dan tepat pada jabatan tersebut yang
dijalankan oleh setiap pihakuntuk memastikan independensi dan objektivitas
2. Unit Bisnis secara langsung mengidentifikasi dan mengelola risiko dalam proses bisnis sebagai Lini Pertama
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.13');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.13_4', '1. Telah ada Model Tata Kelola Risiko Tiga Lini , dengan peran dan tanggung jawab yang jelas dan tepat pada jabatan tersebut yang dijalankan oleh setiap pihak untuk memastikan independensi
dan objektivitasUnit Bisnis secara langsung mengidentifikasi dan mengelola risiko dalam proses bisnis sebagai Lini Pertama
2. Setiap Lini sepenuhnya menjalankan perannya; Lini Pertama dan Lini Kedua bertanggung jawab penuh
3. Self-assurance/self-checking dilakukan di Lini Pertama
4. Lini Kedua kemungkinan memiliki keterbatasan keterampilan /kesulitan mengelola beban kerja saat periode puncak (peak demand) dan belum fleksibel untuk memanfaatkan SDM eksternal
5. Telah ada bukti bahwa keefektifan Tata Kelola Risiko Tiga Lini diuji secara berkala untuk mengetahui adanya kesenjangan, duplikasi, atau ketidakkonsistenan dalam peran dan tanggung jawab guna memastikan optimalisasi penerapannya
6. Model Tata Kelola Risiko Tiga Lini diterapkan dengan baik pada Unit Bisnis, namun, penerapan model pada fungsi penunjang perusahaan (misal SDM, Legal, Keuangan) mungkin masih belum jelas, dengan tanggung jawab risiko yang tumpang tindih/ambigu
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'B.3', 'B.3.13');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.13_5', '1. Unit Bisnis secara langsung mengidentifikasi dan mengelola risiko dalam proses bisnis sebagai Lini Pertama
2. Setiap Lini sepenuhnya menjalankan perannya; Lini Pertama dan Lini Kedua bertanggung jawab penuh
3. Self-assurance/self-checking dilakukan di Lini Pertama
4. Telah ada fleksibilitas untuk memanfaatkan SDM eksternal di Lini Kedua untuk mengisi gap keterampilan dan kapasitas, serta saat periode peak demand
5. Telah ada bukti bahwa keefektifan Tiga Lini Pertahanan diuji secara berkala untuk mengetahui adanya kesenjangan, duplikasi, atau ketidakkonsistenan dalam peran dan tanggung jawab guna memastikan optimalisasi penerapannya
6. Model Tata Kelola Risiko Tiga Lini diterapkan dengan baik tidak hanya melibatkan Unit Bisnis, tapi juga pada fungsi penunjang perusahaan (misal SDM, Legal, Keuangan) dengan penggambaran dan spesifikasi yang jelas tentang kegiatan dan peran yang dilakukan oleh fungsi- fungsi tersebut
7. Implikasi dari perubahan/transformasi dalam proses bisnis dan aktivitas terhadap semua Lini dipertimbangkan dan diimplementasikan dengan baik (misal bukti annual refresh)
8. Setiap unit di seluruh Lini tidak beroperasi sendiri-sendiri, tetapi secara berkala mendiskusikan dan menguji setiap upaya perbaikan berkelanjutan (terdapat bukti/dokumentasi komunikasi)
9. Telah ada bukti yang jelas atas kinerja implementasi Model Tata Kelola Risiko Tiga Lini, di antaranya: telah dilaksanakan penyesuaian berkala (misal setiap tahun) terhadap struktur organisasi Model Tata Kelola Risiko Tiga Lini berdasarkan tinjauan rutin (termasuk pengurangan duplikasi
tanggung jawab, dan penyempurnaan penerapan Model Tata Kelola Risiko Tiga Lini di fungsi penunjang), terutama terlibat dalam mempertimbangkan dampak dari transformasi perusahaan yang sedang berlangsung (jika ada) terhadap desain Model Tata Kelola Risiko Tiga Lini
10. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'B.3', 'B.3.13');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.14_1', '1. Kepemilikan beberapa risiko dalam perusahaan sudah dianalisis secara informal, namun belum ada keputusan yang jelas
2. Penanggung jawab risiko secara tidak langsung sudah diemban oleh unit kerja tertentu, namun masih kurang optimal (misal kepemilikan risiko diemban oleh bidang audit/kontrol/ kepatuhan)
', 1, 'B.3', 'B.3.14');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.14_2', '1. Perusahaan memiliki sedikit pemahaman mengenai penanggung jawab dan kepemilikan risiko, tetapi informasi ini bersifat selektif dan ad- hoc, dan belum ada keputusan formal (tidak terdokumentasi)
2. Kepemilikan risiko oleh Lini Pertama sudah alokasikan secara langsung/tidak langsung, namun masih terdapat kesulitan dalam mengarahkan Lini Pertama agar patuh terhadap prosedur risiko
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'B.3', 'B.3.14');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.14_3', '1. Perusahaan memiliki pemahaman yang jelas mengenai penanggung jawab dan kepemilikan risiko (terdokumentasi secara formal), namun belum ada kesamaan pemahaman dari manajemen senior mengenai risiko yang akan ditanggung oleh perusahaan/Unit Bisnis, atau tidak ada pembaruan rutin (misal tahunan), khususnya untuk risiko-risiko yang akan muncul (emerging risk) atau risiko yang mungkin baru ditambahkan ke taksonomi risiko perusahaan
2. Perusahaan memiliki sedikit kesadaran akan kepemilikan risiko atas mitra dan kompetitor dalam rantai nilai.
3. Lini Pertama menunjukkan kepemilikan risiko
4. Lini Pertama telah memperhatikan kebijakan risiko dalam penetapan target/ sasaran unit
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruhterCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.14');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.14_4', '1. Setiap risiko dan penanggungjawabnya dievaluasi secara sistematis berdasarkan kekuatan dan kelemahan serta faktor- faktor lainnya (misal resiliensi model bisnis, keterampilan dan kapabilitas, kekuatan finansial untuk menanggungnya)
2. Telah ada dokumentasi keputusan manajemen senior mengenai risiko yang akan ditanggung oleh perusahaan/unit Bisnis
3. Unit Bisnis secara langsung mengidentifikasi dan mengelola risiko dalam proses bisnis sebagai Lini Pertama
4. Lini Pertama telah memperhatikan kebijakan risiko dalam penetapan target/ sasaran unit kerja dan terdapat KPI risiko di Lini Pertama
5. Kepemilikan kuat risiko oleh Lini Pertama namun diperkirakan masih bergantung pada Lini 2 (kepemilikan risiko belum sepenuhnya efektif)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'B.3', 'B.3.14');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.14_5', '1. Setiap risiko dan penanggungjawabnya dievaluasi secara sistematis berdasarkan kekuatan dan kelemahan serta faktor-faktor lainnya (misal resiliensi model bisnis, keterampilan dan kapabilitas, kekuatan finansial untuk menanggungnya)
2. Telah ada dokumentasi keputusan manajemen senior mengenai risiko yang akan ditanggung oleh perusahaan/Unit Bisnis
3. Unit Bisnis secara langsung mengidentifikasi dan mengelola risiko dalam proses bisnis sebagai Lini Pertama.
4. Lini Pertama telah memperhatikan kebijakan risiko dalam penetapan target/ sasaran unit kerja dan terdapat KPI risiko di Lini Pertama
5. Kepemilikan risiko dipahami dengan baik dan mempengaruhi keputusan penting (misal keputusan strategis mempertimbangkan input kritis dari personel manajemen yang bertanggung jawab atas risiko tersebut)
6. Lini Pertama menjadi pemilik penuh risiko dan kontrol relevan di lini yang diemban.
7. Telah ada otomatisasi kontrol
8. Setiap unit di seluruh Lini tidak beroperasi sendiri-sendiri, tetapi secara berkala mendiskusikan dan menguji setiap upaya perbaikan berkelanjutan (terdapat bukti/dokumentasi komunikasi)BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.14');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.15_1', '1. Risiko utama belum tetapkan secara formal
2. Pengelolaan dan tanggung jawab risiko masih dilakukan oleh lini kedua
3. Beberapa risiko perusahaan di Lini Pertama sudah dianalisis oleh Lini Kedua secara informal, namun belum ada hasil analisis yang memadai
4. Lini Kedua melakukan tindak lanjut terhadap temuan dan rekomendasi hasil audit eksternal maupun internal terkait manajemen risiko dan hanya sebagian tindaklanjut yang sudah sesuai dengan target penyelesaian
', 1, 'B.3', 'B.3.15');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.15_2', '1. Telah ada dan ditetapkannya risiko utama perusahaan yang dimonitor dan diriviu oleh unit risiko.
2. Unit Risiko mereviu dan memantau profil Risiko, peta Risiko, realisasi perhitungan Risiko inheren dan Risiko residual, dan realisasi pelaksanaan perlakuan Risiko dan biaya agar sesuai dengan target penyelesaian
3. Lini kedua melakukan internal control testing dan stress testing namun belum dilakukan secara berkala
4. Lini Kedua melakukan tindak lanjut terhadap temuan dan rekomendasi hasil audit eksternal maupun internal terkait manajemen risiko dan mayoritas tindaklanjut sudah sesuai dengan target penyelesaian.
5. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'B.3', 'B.3.15');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.15_3', '1. Telah ada dan ditetapkannya risiko utama perusahaan yang dimonitor dan diriviu oleh unit risiko dan dilaporkan secara periodik ke Direksi.
2. Unit Risiko mereviu dan memantau profil Risiko, peta Risiko, realisasi perhitungan Risiko inheren dan Risiko residual, dan realisasi pelaksanaan perlakuan Risiko dan biaya agar sesuai dengan target penyelesaian dan memberi tanggapan secara formal
3. Lini kedua melakukan internal control testing dan stress testing secara berkala
4. Lini kedua menyampaikan risiko utama dan rekomendasi kepada lini ketiga sebagai bahan penyusunan rencana audit tahunan
5. Unit Risiko melakukan tindak lanjut terhadap temuan dan rekomendasi hasil audit eksternal maupun internal terkait manajemen risiko yang secara keseluruhan sudah sesuai target penyelesaian yang diberikan.
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumberdari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.15');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.15_4', '1. Telah dilakukan pemantauan risiko utama oleh lini kedua yang menyebabkan terCapaianya kinerja perusahaan.
2. Unit Risiko mereviu dan memantau profil Risiko, peta Risiko, realisasi perhitungan Risiko inheren dan Risiko residual, dan realisasi pelaksanaan perlakuan Risiko dan biaya agar sesuai dengan target penyelesaian, memberi tanggapan secara formal. Lini kedua menerapkan apresiasi dan hukuman kepada lini pertama dalam pengelolaan risiko.
3. Lini kedua melakukan internal control testing dan stress testing secara berkala
4. Lini kedua menyampaikan risiko utama dan rekomendasi kepada lini ketiga sebagai bahan penyusunan rencana audit tahunan
5. Unit Risiko melakukan tindak lanjut terhadap temuan dan rekomendasi hasil audit eksternal maupun internal terkait manajemen risiko yang secara keseluruhan sudah sesuai target penyelesaian yang diberikan.
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'B.3', 'B.3.15');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.15_5', '1. Telah dilakukan pemantauan risiko utama oleh lini kedua yang menyebabkan kinerja perusahaan tercapai melebihi target.
2. Unit Risiko mereviu dan memantau profil Risiko, peta Risiko, realisasi perhitungan Risiko inheren dan Risiko residual, dan realisasi pelaksanaan perlakuan Risiko dan biaya agar sesuai dengan target penyelesaian, memberi tanggapan secara formal. Lini kedua menerapkan apresiasi dan hukuman kepada lini pertama dalam pengelolaan risiko.
3. Lini kedua melakukan internal control testing dan stress testing secara berkala
4. Lini kedua menyampaikan risiko utama dan rekomendasi kepada lini ketiga sebagai bahan penyusunan rencana audit tahunan
5. Lini Kedua melakukan tindak lanjut terhadap temuan dan rekomendasi hasil audit eksternal maupun internal terkait manajemen risikoyang secara keseluruhan sudah sesuai target penyelesaian yang diberikan
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.15');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.16_1', '1. Tidak terdapat piagam audit intern
2. Prosedur dalam memastikan tata kelola dan pengendalian risiko belum lengkap
3. Terdapat rencana audit tahunan dan alokasi anggaran namun belum berbasis risiko, untuk pelaksanaan fungsi pengawasan intern
4. pelaksanaan pengawasan intern belum sesuai rencana audit tahunan
5. Belum dilakukan evaluasi atas efektivitas pelaksanaan pengendalian intern/ manajemen risiko/ proses tata kelola perusahaan sesuai dengan peraturan perundang-undangan dan kebijakan perusahaan.
6. SPI BUMN induk menyelaraskan strategi pelaksanaan Audit Intern Anak Perusahaan BUMN dengan strategi audit di BUMN Induk
', 1, 'B.3', 'B.3.16');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.16_2', '1. Telah terdapat piagam Audit Intern namun belum dilakukan pengkajian terhadap piagam tersebut secara periodik
2. Terdapat prosedur yang jelas dalam memastikan tata kelola dan pengendalian risiko internal control testing namun belum dilakukan pengkajian secara periodik
3. Terdapat rencana audit tahunan dan alokasi anggaran namun belum berbasis risiko, untuk pelaksanaan fungsi pengawasan intern
4. Memastikan pelaksanaan pengawasan intern sesuai dengan rencana audit tahunan. Sebagian tindakan perbaikan atas temuan/ rekomendasi tahun sebelumnya telah selesai dilakukan.
5. Melakukan evaluasi atas efektivitas pelaksanaan pengendalian intern, manajemen risiko, dan proses tata kelola perusahaan, sesuai dengan peraturan perundang-undangan dan kebijakan perusahaan.
6. SPI BUMN Induk menyelaraskan strategipelaksanaan Audit Intern Anak Perusahaan BUMN dengan strategi audit di BUMN Induk serta merumuskan prinsip Audit Intern yang mencakup metodologi audit
7. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'B.3', 'B.3.16');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.16_3', '1. Telah terdapat piagam audit intern dan dilakukan pengkajian terhadap piagam tersebut secara periodik;
2. Dilakukan pengkajian terhadap prosedur yang berkaitan dengan tata kelola dan pengendalian risiko seperti internal control testing secara periodik
3. Terdapat rencana audit tahunan yang berbasis risiko dan alokasi anggaran untuk pelaksanaan fungsi pengawasan intern
4. Memastikan pelaksanaan pengawasan intern sesuai dengan rencana dan memastikan audittee menyusun rencana tindakan perbaikan yang dapat menjawab temuan/ rekomendasi
5. Melakukan evaluasi atas efektivitas pelaksanaan pengendalian intern, manajemen risiko, dan proses tata kelola perusahaan, sesuai dengan peraturan perundang-undangan dan kebijakan perusahaan.
6. SPI BUMN Induk menentukan strategi pelaksanaan Audit Intern Anak Perusahaan BUMN, merumuskan prinsip Audit Intern yang mencakup metodologi audit dan langkah pelaksanaan pengendalian mutu, serta memantau
pelaksanaan Audit Internpada masing-masing Anak Perusahaan BUMN.
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'B.3', 'B.3.16');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.16_4', '1. Telah terdapat piagam audit intern dan dilakukan pengkajian terhadap piagam tersebut secara periodik;
2. Dilakukan pengkajian terhadap prosedur yang berkaitan dengan tata kelola dan pengendalian risiko secara periodik
3. Terdapat rencana audit tahunan yang berbasis risiko dan alokasi anggaran untuk pelaksanaan fungsi pengawasan intern
4. Pelaksanaan pengawasan intern secara aktif dilaksanakan sesuai dengan rencana audit tahunan, memastikan audittee menyusun rencana tindakan perbaikan yang dapat menjawab temuan/ rekomendasi, dan berkurangnya jumlah temuan
5. Rekomendasi perbaikan atas hasil evaluasi efektivitas pelaksanaan pengendalian intern, manajemen risiko, dan proses tata kelola perusahaan telah dijalankan sebagian oleh manajemen
6. SPI BUMN Induk menentukan strategi pelaksanaan Audit Intern Anak Perusahaan BUMN, merumuskan prinsip Audit Intern yang mencakup metodologi audit dan langkah pelaksanaan pengendalian mutu, serta memantau pelaksanaan Audit Intern pada masing- masing Anak Perusahaan BUMN.
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'B.3', 'B.3.16');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.16_5', '1. Telah terdapat piagam audit intern dan dilakukan pengkajian terhadap piagam tersebut secara periodik;
2. Dilakukan pengkajian terhadap prosedur yang berkaitan dengan tata kelola dan pengendalian risiko secara periodik
3. Terdapat rencana audit tahunan yang berbasis risiko dan alokasi anggaran untuk pelaksanaan fungsi pengawasan intern
4. Pelaksanaan pengawasan intern secara aktif dilaksanakan sesuai dengan rencana audit tahunan, memastikan audittee menyusun rencana tindakan perbaikan yang dapat menjawab temuan/ rekomendasi dan tidak terdapat temuan berulang.
5. Rekomendasi perbaikan atas hasil evaluasi efektivitas pelaksanaan pengendalian intern, manajemen risiko, dan proses tata kelola perusahaan telah dijalankan seluruhnya oleh manajemen
6. SPI BUMN Induk menentukan strategi pelaksanaan Audit Intern Anak Perusahaan BUMN, merumuskan prinsip Audit Intern yang mencakup metodologi audit dan langkah pelaksanaan pengendalian mutu, serta memantau pelaksanaan Audit Intern pada masing-masing Anak Perusahaan BUMN.
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.16');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.17_1', '1. Assurance dan Risiko dilaksanakan oleh tim yang sama/tidak terpisah (misal Risiko bagian dari Assurance)', 1, 'B.3', 'B.3.17');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.17_2', '1. Tanggung jawab antara Assurance dan Risiko bersifat umum dan sebagian besar tumpang tindih, atau Assurance dan Risiko merupakan dua tim terpisah, namun di beberapa bagian masih terdapat tumpang tindih tanggung jawab (misal Audit terlibat dalam penyusunan proses Manajemen Risiko).
2. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'B.3', 'B.3.17');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.17_3', '1. Assurance dan Risiko merupakan dua tim terpisah dengan tanggung jawab yang terpisah dan terdefinisi dengan jelas
2. Fungsi Assurance tidak terlibat dalam penyusunan atau penerapan proses Manajemen Risiko atau mengelola risiko; sebaliknya, mereka memastikan bahwa setiap risiko telah dievaluasi, dimonitor, dan dilaporkan dengan tepat.
3. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risikoyang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.17');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.17_4', '1. Assurance dan Risiko merupakan dua tim terpisah dengan tanggung jawab yang terpisah dan terdefinisi dengan jelas
2. Fungsi Assurance tidak terlibat dalam penyusunan atau penerapan proses Manajemen Risiko atau mengelola risiko; sebaliknya, mereka memastikan bahwa setiap risiko telah dievaluasi, dimonitor, dan dilaporkan dengan tepat.
3. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risikoyang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 4, 'B.3', 'B.3.17');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.17_5', '1. Assurance dan Risiko merupakan dua tim terpisah dengan tanggung jawab yang terpisah dan terdefinisi dengan jelas
2. Fungsi Assurance tidak terlibat dalam penyusunan atau penerapan proses Manajemen Risiko atau mengelola risiko, sebaliknya, mereka memastikan bahwa setiap risiko telah dievaluasi, dimonitor, dan dilaporkan dengan tepat
3. Fungsi Assurance bersifat independen dan bertugas untuk memastikan bahwa manajemen dan kontrol risiko dilakukan secara efektif (internal audit)
4. Fungsi Assurance secara efektif melakukan tugasnya sebagai garis terakhir terhadap risiko (misal terdapat bukti pelaksanaan tugas/laporan audit internal yang menggambarkan kegiatan evaluasi atas proses Manajemen Risiko)
5. Interaksi antara fungsi Assurance dan Risiko sangat kolaboratif (misal fungsi Risiko mempertimbangkan masukan darifungsi Assurance sebagai bagian dari perbaikan berkesinambungan).
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.17');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.18_1', '1. Belum ada harmonisasi kebijakan tingkat induk dan anak
2. Belum terdapat organ Komite Tata Kelola Terintegrasi (KTKT) sesuai dengan kategori & klasifikasi risiko BUMN
3. Tidak dilakukan evaluasi kebijakan Tata Kelola Terintegrasi
', 1, 'B.3', 'B.3.18');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.18_2', 'pada Anak Perusahaan BUMN agar selaras dengan kebijakan Tata Kelola Terintegrasi BUMN Induk dan Anak Perusahaan BUMN
1. Dekom/ Dewas belum secara optimal mengawasi pelaksanaan tugas dan tanggung jawab Direksi BUMN Induk, serta memberikan arahan atau nasihat kepada Direksi BUMN Induk atas pelaksanaan kebijakan Tata Kelola Terintegrasi;
2. Dekom/ Dewas belum secara optimal melaksanakan pengawasan dan pemberian nasihat terhadap pelaksanaan fungsi Tata Kelola Terintegrasi lainnya sesuai dengan ketentuan peraturan perundang- undangan, anggaran dasar, dan/atau keputusan RUPS/Menteri.
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'B.3', 'B.3.18');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.18_3', '1. Direksi BUMN Induk telah menetapkan kebijakan pada tingkat BUMN Induk yang diharmonisasikan dengan kebijakan pada tingkat Anak Perusahaan BUMN melalui:
1) Direktur yang melaksanakan tugas fungsional BUMN Induk wajib melakukan harmonisasi kebijakan fungsional pada Anak Perusahaan BUMN
2) Direktur yang melaksanakan tugas pembinaan wajib memastikan keselarasan dan sinergitas strategi BUMN Induk dan Anak Perusahaan BUMN.
2. Direksi BUMN Induk memantau implementasi kebijakan harmonisasi dengan kebijakan BUMN Induk;
3. Direksi BUMN induk menindaklanjuti arahan atau nasihat Dekom/Dewas dalam rangka penyempurnaan Kebijakan Tata Kelola Terintegrasi
4. Direksi BUMN Induk melakukan pemantauan Risiko secara terstruktur dan terintegrasi antara BUMN Induk dengan Anak
5. Adanya organ Komite Tata Kelola Terintegrasi (KTKT) sesuai dengan kategori &klasifikasi risiko di BUMN Induk dan anak perusahaan
6. Dekom/ Dewas melakukan evaluasi kebijakan Tata Kelola Terintegrasi dan mengarahkan untuk penyempurnaan
7. Dekom/ Dewas mengawasi penerapan Tata Kelola Terintegrasi pada Anak Perusahaan BUMN agar selaras dengan kebijakan Tata Kelola Terintegrasi BUMN Induk dan Anak Perusahaan BUMN
8. Dekom/ Dewas mengawasi pelaksanaan tugas dan tanggung jawab Direksi BUMN Induk, serta memberikan arahan atau nasihat kepada Direksi BUMN Induk atas pelaksanaan kebijakan Tata Kelola Terintegrasi;
9. Dekom/ Dewas melaksanakan pengawasan dan pemberian nasihat terhadap pelaksanaan fungsi Tata Kelola Terintegrasi lainnya sesuai dengan ketentuan peraturan perundang-undangan, anggaran dasar, dan/atau keputusan RUPS/Menteri.
10. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.18');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.18_4', '1. Direksi BUMN Induk telah menetapkan kebijakan pada tingkat BUMN Induk yang diharmonisasikan dengan kebijakan pada tingkat Anak Perusahaan BUMN melalui:
1) Direktur yang melaksanakan tugas fungsional BUMN Induk wajib melakukan harmonisasi kebijakan fungsional pada Anak Perusahaan BUMN
2) Direktur yang melaksanakan tugas pembinaan wajib memastikan keselarasan dan sinergitas strategi BUMN Induk dan Anak Perusahaan BUMN.
2. Direksi BUMN Induk memantau implementasi kebijakan harmonisasi dengan kebijakan BUMN Induk. Direksi BUMN induk menindaklanjuti arahan atau nasihat Dekom/Dewas dalam rangka penyempurnaan Kebijakan Tata Kelola Terintegrasi
3. Direksi BUMN Induk melakukan pemantauan Risiko secara terstruktur dan terintegrasi antara BUMN Induk dengan Anak
4. Adanya organ Komite Tata Kelola Terintegrasi (KTKT) sesuai dengan kategori & klasifikasi risiko di BUMN Induk dan anak perusahaan
5. Dekom/ Dewas melakukan evaluasi kebijakan Tata Kelola Terintegrasi dan mengarahkan untuk penyempurnaan. Dekom/ Dewas mengawasi pelaksanaan penyempurnaan kebijakan Tata Kelola TerintegrasiDekom/ Dewas mengawasi penerapan Tata Kelola Terintegrasi pada Anak Perusahaan BUMN agar selaras dengan kebijakan Tata Kelola Terintegrasi BUMN Induk dan Anak Perusahaan BUMN
6. Dekom/ Dewas mengawasi pelaksanaan tugas dan tanggung jawab Direksi BUMN Induk, serta memberikan arahan atau nasihat kepada Direksi BUMN Induk atas pelaksanaan kebijakan Tata Kelola Terintegrasi;
7. Dekom/ Dewas belum secara optimal melaksanakan pengawasan dan pemberian nasihat terhadap pelaksanaan fungsi Tata Kelola Terintegrasi lainnya sesuai dengan ketentuan peraturan perundang-undangan, anggaran dasar, dan/atau keputusan RUPS/Menteri.
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'B.3', 'B.3.18');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.18_5', '1. Direksi BUMN Induk telah menetapkan kebijakan pada tingkat BUMN Induk yang diharmonisasikan dengan kebijakan pada tingkat Anak Perusahaan BUMN melalui:
1) Direktur yang melaksanakan tugas fungsional BUMN Induk wajib melakukan harmonisasi kebijakan fungsional pada Anak Perusahaan BUMN
2) Direktur yang melaksanakan tugas pembinaan wajib memastikan keselarasan dan sinergitas strategi BUMN Induk dan Anak Perusahaan BUMN.
2. Direksi BUMN Induk memantau implementasi kebijakan harmonisasi dengan kebijakan BUMN Induk. Direksi BUMN induk menindaklanjuti arahan atau nasihat Dekom/Dewas dalam rangka penyempurnaan Kebijakan Tata Kelola Terintegrasi
3. Direksi BUMN Induk melakukan pemantauan Risiko secara terstruktur dan terintegrasi antara BUMN Induk dengan Anak serta memastikan dijalankannya mitigasi ataupun menyiapkan mitigasi baru untuk menurunkan tingkat risiko tersebut sehingga tingkat risiko turun sesuai dengan target.
4. Adanya organ Komite Tata Kelola Terintegrasi (KTKT) sesuai dengan kategori & klasifikasi risiko di BUMN Induk dan anak perusahaan
5. Dekom/ Dewas melakukan evaluasi kebijakan Tata Kelola Terintegrasi dan mengarahkan untuk penyempurnaan. Dekom/ Dewas mengawasi pelaksanaan penyempurnaan
kebijakan Tata Kelola TerintegrasiDekom/ Dewas mengawasi penerapan Tata Kelola Terintegrasi pada Anak Perusahaan BUMN agar selaras dengan kebijakan Tata Kelola Terintegrasi BUMN Induk dan Anak Perusahaan BUMN
6. Dekom/ Dewas mengawasi pelaksanaan tugas dan tanggung jawab Direksi BUMN Induk, serta memberikan arahan atau nasihat kepada Direksi BUMN Induk atas pelaksanaan kebijakan Tata Kelola Terintegrasi;
7. Dekom/ Dewas belum secara optimal melaksanakan pengawasan dan pemberian nasihat terhadap pelaksanaan fungsi Tata Kelola Terintegrasi lainnya sesuai dengan ketentuan peraturan perundang-undangan, anggaran dasar, dan/atau keputusan RUPS/Menteri.
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.18');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.19_1', '1. Telah ada mandat secara informal bagi beberapa pegawai/jajaran pimpinan utama untuk memantau risiko, namun belum dilaksanakan secara independen (misal pegawai yang ditunjuk untuk melakukan tugas pemantauan risiko di Unit Bisnis juga bertanggung jawab untuk penjualan)', 1, 'B.3', 'B.3.19');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.19_2', '1. Fungsi risiko pusat tidak memiliki mandat dan kewenangan formal untuk melaksanakan tanggung jawab utamanya
2. Tanggung jawab utama dalam monitoring hanya dilakukan di tingkat Unit Bisnis tanpa konsolidasian dan pandangan transversal
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN ', 2, 'B.3', 'B.3.19');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.19_3', '1. Telah ada mandat/ hubungan formal bagi fungsi risiko pusat untuk memonitor risiko di seluruh lini perusahaan dengan pandangan konsolidasian dan transversal, termasuk dengan anak perusahaan (misal terdapat kerangka tata kelola risiko yang menjelaskan kewenangan ini bagi seluruh lini perusahaan dan tercantum pada kebijakan Manajemen Risiko)
2. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'B.3', 'B.3.19');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.19_4', '1. Telah ada mandat/hubungan formal bagi fungsi risiko pusat untuk memonitor risiko di seluruh lini perusahaan dengan pandangan konsolidasian dan transversal, termasuk dengan anak perusahaan (misal terdapat kerangka tata kelola risiko yang menjelaskan kewenangan ini bagi seluruh lini perusahaan dan tercantum pada kebijakan Manajemen Risiko)
2. Kewenangan fungsi risiko pusat dan tingkat Unit Bisnis/anak perusahaan didefinisikan dan dikomunikasikan dengan baik (misal panduan mana yang diturunkan ke Unit Bisnis/anak perusahaan (jika relevan), bagian mana yang merupakan kewenangan pengambilan keputusan Unit Bisnis/anak) perusahaan dan sebagainya
3. Telah ada alur pelaporan yang jelas untuk fungsi risiko di seluruh organisasi, termasuk dari divisi risiko khusus/fungsi risiko di anak perusahaan ke fungsi risiko pusat kemudian ke komite di tingkat Komisaris/Direksi yang bertanggung jawab atas Manajemen Risiko
4. Telah ada bukti bahwa perusahaan melakukan tinjauan secara berkala untuk memastikan apakah mandat, kerangka kerja, kebijakan/prosedur risiko yang diturunkan dari fungsi risiko pusat telah diimplementasikan dengan baik ke seluruh lini perusahaan (termasuk Unit Bisnis/anak perusahaan)
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'B.3', 'B.3.19');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('B.3.19_5', '1. Telah ada mandat/hubungan formal bagi fungsi risiko pusat untuk memonitor risiko di seluruh lini perusahaan dengan pandangan konsolidasian dan transversal, termasuk dengan anak perusahaan (misal terdapat kerangka tata kelola risiko yang menjelaskan kewenangan ini bagi seluruh lini perusahaan dan tercantum pada kebijakan Manajemen Risiko)
2. Kewenangan fungsi risiko pusat dan tingkat Unit Bisnis/anak perusahaan didefinisikan dan dikomunikasikan dengan baik misal, panduan mana yang diturunkan ke Unit Bisnis/anak perusahaan (jika relevan), bagian mana yang merupakan kewenangan pengambilan keputusan Unit Bisnis/anak perusahaan dan sebagainya
3. Telah ada alur pelaporan yang jelas untuk fungsi risiko di seluruh organisasi, termasuk dari divisi risiko khusus/fungsi risiko di anak perusahaan ke fungsi risiko pusat kemudian ke komite di tingkat Komisaris/Direksi yang bertanggung jawab atas Manajemen Risiko
4. Telah ada bukti bahwa perusahaan melakukan tinjauan secara berkala (misal setiap tahun) untuk menilai apakah mandat, kerangka kerja, kebijakan/prosedur risiko yang diturunkan dari fungsi risiko pusat telah diimplementasikan dengan baik ke seluruh lini perusahaan (termasuk Unit Bisnis/anak perusahaan)
5. Telah ada interaksi yang efektif dan harmonis antara fungsi risiko pusat dan divisi-divisi lain dalam hierarki Manajemen Risiko (misal divisi risiko khusus/fungsi risiko di anak perusahaan) untuk menyelaraskan strategi risiko, identifikasi dan penanganan risiko utama (misal rapat mingguan/bulanan, keputusan utama yang diambil dan ada bukti bahwa keputusan tersebut efektif, dilakukan pemantauan dan
pengawasan yang diberikan oleh fungsirisiko pusat yang efektif dalam menjaga jadwal proyek sesuai jadwal di semua fungsi di bawahnya)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'B.3', 'B.3.19');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.20_1', '1. Telah ada inisiatif peningkatan kualitas kerangka Enterprise Risk Management namun belum dilakukan pembaruan selama beberapa periode terakhir (misal upaya inisiatif terakhir dilakukan lebih dari tiga tahun yang lalu)', 1, 'C.1', 'C.1.20');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.20_2', '1. Telah ada pembahasan tahap awal mengenai peningkatan kualitas Enterprise Risk Management, namun belum ada insiatif yang disusun dan diusulkan', 2, 'C.1', 'C.1.20');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.20_3', '1. Telah ada pembahasan formal dan pengusulan inisiatif peningkatan kualitas kerangka Enterprise Risk Management', 3, 'C.1', 'C.1.20');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.20_4', '1. Inisiatif telah diluncurkan dan telah dilakukan banyak kegiatan untuk menyelesaikan inisiatif tersebut', 4, 'C.1', 'C.1.20');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.20_5', '1. Telah ada sejumlah inisiatif peningkatan kualitas kerangka Enterprise Risk Management dengan pengukuran dampak yang jelas, contohnya secara kuantitatif (misal penurunan jumlah peristiwa risiko) atau secara kualitatif (misal jajaran manajemen melakukan pemantauan dengan lebih baik)', 5, 'C.1', 'C.1.20');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.21_1', '1. Perusahaan belum memiliki rencana transformasi Enterprise Risk Management yang jelas dan dapat ditindaklanjuti untuk beberapa tahun ke depan atau jangka panjang (masih ada mentalitas cepat merasa puas atas kematangan Enterprise Risk Management saat ini)
2. Dalam konteks transformasi ESG untuk bank:
1) Risiko ESG/Iklim telah tercantum pada taksonominamun implikasinya terhadap kerangka risiko belum dikaji
', 1, 'C.1', 'C.1.21');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.21_2', '1. Perusahaan telah memiliki rencana transformasi Enterprise Risk Management, untuk beberapa tahun ke depan atau jangka panjang namun ruang lingkup transformasi hanya untuk pemenuhan persyaratan regulator (perusahaan â€˜menungguâ€™ diprasyaratkan regulator sebelum melakukan inovasi/transformasi)
2. Rencana masih kurang mendetail dan belum ada prioritas pelaksanaannya
3. Dalam konteks transformasi ESG untuk bank:Risiko ESG/Iklim telah tercantum pada taksonomi
1) Beberapa implikasi risiko ESG/Iklim dimasukkan ke dalam Kerangka Kerja ERM (contohnya kebijakan kredit karbon) tetapi hanya secara umum (misal risiko ESG/Iklim hanya menjadi bagian kecil dari keseluruhan strategi ESG/Iklim atau belum ada rencana eksekusi mendetail).', 2, 'C.1', 'C.1.21');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.21_3', '1. Perusahaan memiliki rencana transformasi yang jelas untuk beberapa tahun ke depan atau jangka panjang yang dapat ditindaklanjuti dan mendetail (misal tata waktu, kebutuhan sumber daya, pemantauan program, dan sebagainya)
2. Dalam konteks transformasi ESG untuk bank:
1) Risiko ESG/Iklim telah tercantum pada taksonomi
2) Implikasi risiko ESG/Iklim dimasukkan secara jelas ke dalam Kerangka Kerja ERM (contohnya kebijakan kredit karbon)
3) Telah ada tim khusus ESG/Iklim yang dibentuk.Telah dilakukan analisis terhadap dampak risiko ESG/Iklim pada portofolio
4) Tersedia beberapa analisis dan data.', 3, 'C.1', 'C.1.21');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.21_4', '1. Perusahaan memiliki rencana transformasi yang jelas untuk beberapa tahun ke depan atau jangka panjang yang dapat ditindaklanjuti dan mendetail (misal tata waktu, kebutuhan sumber daya, pemantauan program, dan sebagainya)
2. Ruang lingkup transformasi jauh melampaui pemenuhan persyaratan regulator (misal menjadi bagian dari perbaikan berkelanjutan), transformasi didasarkan pada benchmark untuk menerapkan best-practice secara global dalam perusahaan
3. Dalam konteks transformasi ESG untuk bank:
1) Risiko ESG/Iklim telah tercantum pada taksonomi
2) Implikasi risiko ESG/Iklim dimasukkan secara jelas ke dalam Kerangka KerjaERM (contohnya kebijakan kredit karbon)
3) Telah ada tim khusus ESG/Iklim yang dibentuk.
4) Telah dilakukan analisis terhadap dampak risiko ESG/Iklim pada portofolio
5) Tersedia beberapa analisis dan data
6) Telah ada target khusus yang ditetapkan dan dikomunikasikan
7) Telah ada rencana jangka panjang untuk mencapai target
8) Telah ada Model iklim (contohnya climate stress testing)
', 4, 'C.1', 'C.1.21');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.21_5', '1. Perusahaan memiliki rencana transformasi yang jelas untuk beberapa tahun ke depan atau jangka panjang yang dapat ditindaklanjuti dan mendetail (misal tata waktu, kebutuhan sumber daya, pemantauan program, dan sebagainya)
2. Ruang lingkup transformasi jauh melampaui pemenuhan persyaratan regulator (misal menjadi bagian dari perbaikan berkelanjutan), transformasi didasarkan pada benchmark untuk menerapkan best-practice secara global dalam perusahaan
3. Program diperbarui secara rutin
4. Telah ada tim khusus yang bertanggung jawab atas pelaksanaan rencana transformasi dan kesuksesannya. Unit Bisnis dan fungsi lainnya terlibat dalam rencana transformasi ini (misal dalam tahap
perancangan dan pelaksanaannya)Pengukuran yang jelas atas estimasi "value-at-stake" yang akan diperoleh dari program transformasi ERM yang dimonitor ketika program diimplementasikan (fokus ERM bergeser dari "kepatuhan" ke "value captureâ€)
5. Dalam konteks transformasi ESG untuk bank:
1) Risiko ESG/Iklim telah tercantum pada taksonomi
2) Implikasi risiko ESG/Iklim dimasukkan secara jelas ke dalam Kerangka Kerja ERM (contohnya kebijakan kredit karbon)
3) Telah ada tim khusus ESG/Iklim yang dibentuk.
4) Telah dilakukan analisis terhadap dampak risiko ESG/Iklim pada portofolio
5) Tersedia beberapa analisis dan data
6) Telah ada target khusus yang ditetapkan dan dikomunikasikan
7) Telah ada rencana jangka panjang untuk mencapai target
8) Telah ada Model iklim (contohnya climate stress testing)
9) Selain agenda-agenda defensif (menghindari kerugian), perusahaan menggali peluang bisnis baru dan pertumbuhan melalui agenda ESG/Iklim (meraih manfaat dari risiko tersebut)
', 5, 'C.1', 'C.1.21');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.22_1', '1. Telah ada strategi perusahaan dan strategi risiko, namun penyusunannya dilakukan secara terpisah', 1, 'C.1', 'C.1.22');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.22_2', '1. Strategi perusahaan dan bisnis ditetapkan terlebih dahulu, kemudian strategi risiko didefinisikan setelahnya (risiko baru menjadi pertimbangan setelah strategi bisnis tersusun)
2. Unit Bisnis tidak bekerja sama dengan divisi Risiko dalam penyusunan rencana strategisBUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.1', 'C.1.22');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.22_3', '1. Dilakukan penyelarasan secara rutin antara strategi perusahaan dan strategi risiko untuk memastikan bahwa rencana strategis telahmempertimbangkan risiko (misal anggaran tahunan, penentuan proyek strategis)
2. Risiko dipertimbangkan dalam perencanaan strategis hanya untuk menghindari kerugian, belum untuk menggali manfaat dari risikoBUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.1', 'C.1.22');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.22_4', '1. Dilakukan penyelarasan secara rutin antara strategi perusahaan dan strategi risiko untuk memastikan bahwa rencana strategis telah mempertimbangkan risiko (misal anggaran tahunan, penentuan proyek strategis)
2. Rencana strategis perusahaan sepenuhnya mempertimbangkan risiko yang dilakukan dengan pendekatan sistematis dan terstruktur (mempertimbangkan skenario risiko dalam upaya pencapaian sasaran perusahaan)Implikasi risiko terhadap rencana strategis perusahaan dipahami dengan baik, misalnya:
1) Manajemen mengetahui perilaku pengambilan risiko yang diperlukan dan kaitannya dengan strategi risiko
2) Setiap keputusan penting strategi perusahaan harus didukung oleh analisis risiko yang spesifik untuk keputusan tersebut
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.1', 'C.1.22');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.22_5', '1. Implikasi risiko terhadap rencana strategis perusahaan dipahami dengan baik, misalnya:
1) Manajemen mengetahui perilaku pengambilan risiko yang diperlukan dan kaitannya dengan strategi risiko
2) Setiap keputusan penting strategi perusahaan (misal dalam RKAP/RJPP) harus didukung oleh analisis risiko yang spesifik untuk keputusan tersebut
2. Telah ada bukti dan dokumentasi bahwa Risiko dan Strategi bekerja sama menjadi mitra dalam pembahasan dan penyusunan keseluruhan strategi risiko dan strategi perusahaan, contohnya,
1) Personil risiko utama dilibatkan secara ekstensif dalam proses penetapan strategi (bukan hanya di akhir proses untuk "memeriksa" atau "menyetujui" strategi yang ditetapkan
2) Telah ada analisis risiko yang digunakan untuk menguji dan memperkaya pertimbangan strategis (risiko mengambil peran aktif dan memberi nilai tambah)
3) Analisis risiko difokuskan pada prinsip- prinsip penciptaan nilai/menyeimbangkan pertimbangan sisi positif dan negatif (daripada hanya berfokus pada mengurangi sisi negatif)
3. Unit Bisnis memahami cara mempertimbangkan risiko dalam perencanaan strategis untuk menggali manfaat
4. Telah ada bukti yang jelas atas kinerja penerapan manajemen risiko dalam penyusunan rencana strategis, di antaranya:
1) Metrik yang menilai keberhasilan strategi perusahaan ditetapkan dengan target yang dikaitkan dengan analisis risiko yang sesuai (misal trade-off dari pengambilan keputusan strategis dipertimbangkan dalam scenario
analysis)                                                                                                                                                                                                                                                                                                                                                                                                                        2) Pemantauan progres strategi perusahaan melibatkan personel risiko senior
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.1', 'C.1.22');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.23_1', '1. Evaluasi peran Manajemen Risiko terhadap pencapaian target strategis RKAP telah dilakukan, namun prosesnya belum terstruktur (kerangka kerja belum dibentuk, analisis dilakukan secara ad-hoc) dan belum dilakukan pembahasan (misal dibahas di rapat manajemen risiko Dewan Komisaris/Direksi)', 1, 'C.1', 'C.1.23');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.23_2', '1. Telah ada kerangka kerja informal untuk mengevaluasi peran Manajemen Risiko terhadap pencapaian target strategis RKAP dan evaluasi tersebut dilakukan dan dibahas secara informal (misal dibahas di rapat manajemen risiko Dewan Komisaris/Direksi secara ad-hoc) dan belum ada analisis yang jelas dan detail
2. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'C.1', 'C.1.23');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.23_3', '1. Telah ada kerangka kerja formal untuk mengevaluasi peran manajemen risiko terhadap pencapaian target strategis RKAP, termasuk analisis:
1) Jika target perusahaan tercapai, apa saja praktik Manajemen Risiko (misal budaya risiko, organisasi dan tata kelola, kerangka kerja dan kepatuhan, proses dan kontrol, model, data dan teknologi) yang mungkin berkontribusi terhadap pencapaian tersebut (misal pencegahan/ pengurangan dampak peristiwa risiko yang dapat mempengaruhi kemampuan BUMN untuk mencapai target)
2) Jika target perusahaan tidak tercapai, apa saja praktik manajemen risiko yang mungkin berkontribusi terhadap kegagalan pencapaian target (misal peristiwa risiko yang kemungkinan berdampak pada kemampuan BUMN untuk mencapai target, dan dapat dicegah/dikurangi dampaknya dengan praktikmanajemen risiko yang lebih baik)
2. Evaluasi dilakukan hanya sebagai "formalitas" misal belum ada langkah tindak lanjut yang jelas untuk memperbaiki kekurangan dalam praktik Manajemen Risiko yang kemudian dievaluasi untuk meningkatkan potensi pencapaian target RKAP untuk penyusunan RKAP berikutnya
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'C.1', 'C.1.23');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.23_4', '1. Telah ada kerangka kerja formal untuk mengevaluasi peran Manajemen Risiko terhadap pencapaian target strategis RKAP, termasuk analisis:
1) Jika target perusahaan tercapai, apa saja praktik Manajemen Risiko (misal budaya risiko, organisasi dan tata kelola, kerangka kerja dan kepatuhan, proses dan kontrol, model, data dan teknologi) yang mungkin berkontribusi terhadap pencapaian tersebut (misal pencegahan/pengurangan dampak peristiwa risiko yang dapat mempengaruhi kemampuan BUMN untuk mencapai target)
2) Jika target perusahaan tidak tercapai, apa saja praktik manajemen risiko yang mungkin berkontribusi terhadap kegagalan pencapaian target (misal peristiwa risiko yang kemungkinan berdampak pada kemampuan BUMN untuk mencapai target, dan dapat dicegah/dikurangi dampaknya dengan praktik manajemen risiko yang lebih baik)
2. Evaluasi ini secara efektif membantu BUMN memperbaiki praktik manajemen risikonya untuk perencanaan RKAP berikutnya (misal kekurangan yang ditemukan telah ditindaklanjuti atau kelebihan/kekuatan terus dipertahankan atau bahkan ditingkatkan lebih jauh) serta memiliki langkah tindak lanjut/inisiatif perbaikan yang jelas(misal ditunjuknya penanggung jawab, tata waktu/milestone jelas, dilakukan monitoring.
3. Analisis sebagian besar bersifat backward-looking dan mengevaluasi kinerja pada periode saat ini/sebelumnya (misal belum ada analisis skenario kuantitatif forward- looking mengenai bagaimana pengaruh praktik Manajemen Risiko tertentu terhadap keberhasilan/kegagalan pencapaian target RKAP).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.1', 'C.1.23');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.23_5', '1. Telah ada kerangka kerja formal untuk mengevaluasi peran manajemen risiko terhadap pencapaian target strategis RKAP, termasuk analisis:
1) Jika target perusahaan tercapai, apa saja praktik Manajemen Risiko (misal budaya risiko, organisasi dan tata kelola, kerangka kerja dan kepatuhan, proses dan kontrol, model, data dan teknologi) yang mungkin berkontribusi terhadap pencapaian tersebut (misal pencegahan/pengurangan dampak peristiwa risiko yang dapat mempengaruhi kemampuan BUMN untuk mencapai target)
2) Jika target perusahaan tidak tercapai, apa saja praktik Manajemen Risiko yang mungkin berkontribusi terhadap kegagalan pencapaian target (misal peristiwa risiko yang kemungkinan berdampak pada kemampuan BUMN untuk mencapai target, dan dapat dicegah/dikurangi dampaknya dengan praktik Manajemen Risiko yang lebih baik)
2. Evaluasi ini secara efektif membantu BUMN memperbaiki praktik manajemen risikonya untuk perencanaan RKAP berikutnya (misal kekurangan yang ditemukan telah ditindaklanjuti atau kelebihan /kekuatan terus dipertahankan atau bahkan ditingkatkan lebih jauh) serta memiliki langkah tindak lanjut/inisiatif perbaikan yang jelas (misal ditunjuknyapenanggung jawab, tata waktu/milestone jelas, dilakukan monitoring
3. Dilakukan analisis backward-looking dan forward-looking untuk pencapaian periode berikutnya (misal terdapat analisis skenario kuantitatif forward-looking mengenai bagaimana pengaruh praktik manajemen risiko tertentu terhadap keberhasilan/kegagalan pencapaian target RKAP).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.1', 'C.1.23');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.24_1', '1. Telah dilakukan identifikasi elemen- elemen kapasitas risiko yang relevan terhadap perusahaan (misal Net Working Capital, EBITDA untuk perusahaan korporasi, atau persyaratan modal minimum untuk mengantisipasi loss event,dan lain sebagainya)
2. Namun, belum ada pemahaman yang selaras mengenai elemen-elemen tersebut (misal definisi/cakupanelemen yang digunakan dalam analisis berbagai jenis risiko tidak sama)', 1, 'C.1', 'C.1.24');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.24_2', '1. Telah ada pemahaman yang seragam mengenai elemen-elemen utama kapasitas risiko yang relevan terhadap perusahaan (misal Net Working Capital , EBITDA untuk perusahaan korporasi, atau persyaratan modal minimum untuk mengantisipasi loss event, dan lain sebagainya)
2. Belum ada analisis yang menjelaskan level risiko yang dapat ditanggung (batas risiko ditentukan secara arbitrer) BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'C.1', 'C.1.24');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.24_3', '1. Telah ada pemahaman yang seragam mengenai elemen- elemen utama kapasitas risiko yang relevan terhadap perusahaan (misal Net Working Capital , EBITDA untuk perusahaan korporasi, atau persyaratan modal minimum untuk mengantisipasi loss event, dan lain sebagainya)
2. Telah ada analisis yang menjelaskan level risiko yang dapat ditanggung (misal berdasarkan data historis atau persyaratan minimum regulator)
3. BUMN dengan skor maturitas pada parameter ini telahmenerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.1', 'C.1.24');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.24_4', '1. Telah ada pemahaman yang seragam mengenai sejumlah elemen penting kapasitas risiko (misal terdapat perhitungan detail/daftar metrik kapasitas risiko yang dapat ditanggung oleh perusahaan)
2. Telah ada analisis mendetail yang memperhitungkan biaya-biaya jika melampaui kapasitas risiko
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.1', 'C.1.24');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.24_5', '1. Telah ada pemahaman yang seragam mengenai sejumlah elemen penting kapasitas risiko (misal terdapat perhitungan detail/daftar metrik kapasitas risiko yang dapat ditanggung oleh perusahaan)
2. Telah ada analisis mendetail yang memperhitungkan biaya-biaya jika melampaui kapasitas risiko
3. Kapasitas risiko terhubung dengan selera risiko, limit risiko, dan metrik risiko
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.1', 'C.1.24');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.25_1', '1. Pemangku kepentingan utama (misal anggota Dewan Komisaris/Direksi) mungkin telah mengetahui konsep selera risiko, walaupun belum ada pernyataan selera risiko dari perusahaan
2. Telah ada konsep informal selera risiko secara umum/garis besar (misal perusahaan berusaha untuk menghindari kerugian neraca dari semua peristiwa risiko yang tidak melebihi batas tertentu), meskipun belum ada pernyataan selera risiko untuk setiap jenis risiko
3. Perumusan selera risiko telah direncanakan sebagai bagian dari insiatif di masa mendatang untuk transformasimanajemen risiko di perusahaan
', 1, 'C.1', 'C.1.25');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.25_2', '1. Telah ada konsep selera risiko yang untuk beberapa jenis risiko (misal keinginan untuk menjaga rating), namun konsep selera risiko belum dipahami dan digunakan secara jelas (belum ada prosedur/standar perumusan selera risiko)
2. Selera risiko yang ada cenderung bersifat kualitatif, tanpa ada keterkaitan dengan kapasitas risiko
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.1', 'C.1.25');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.25_3', '1. Telah ada pernyataan selera risiko formal yang terhubung/konsisten dengan kapasitas risiko
2. Mencakup Dimensi dan ambang batas kuantitatif dan kualitatif (misal untuk menangkap permasalahan risiko yang lebih kualitatif seperti risiko reputasi)
3. Selera risiko menjadi salah satu konsiderasi dalam penyusunan rencana strategis perusahaan
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.1', 'C.1.25');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.25_4', '1. Telah ada pernyataan selera risiko formal yang terhubung/konsisten dengan kapasitas risiko
2. Mencakup Dimensi dan ambang batas kuantitatif dan kualitatif (misal untuk menangkap permasalahan risiko yang lebih kualitatif seperti risiko reputasi)
3. Selera risiko menjadi salah satu konsiderasi dalam penyusunan rencana strategis perusahaan
4. Pernyataan selera risiko memiliki toleransi risiko, ambang batas, dan metrik untuk beberapa risiko (misal risiko operasional, risiko pasar), baik dalam bentuk kuantitatif dan kualitatif
5. Dilakukan kaji ulang/reviu rutin terhadap pernyataan selera risiko (misal tahunan) sebagai bagian dari proses formal
6. Selera risiko dan strategi risiko menjadi bagian inti dari materi komunikasi investor dan pemangku kepentingan eksternal (misal tercantum di laman web dan laporan tahunan)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'C.1', 'C.1.25');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.25_5', '1. Keputusan strategis dibuat dengan mempertimbangkan konteks selera risiko
2. Proses bisnis yang melibatkan keputusan terkait dengan pernyataan selera risiko harus dimodifikasi untuk memastikan kepatuhan terhadap pernyataan selera risiko (misal perencanaan strategis, perencanaan modal, stress testing)
3. Pernyataan selera risiko dibuat secara bertahap (misal metrik khusus Unit Bisnis) dengan arahan yang jelas untuk diselaraskan dengan pernyataan selera risiko di tingkat perusahaan
4. Telah ada peraturan yang jelas mengenai kewajiban untuk mematuhi selera risiko dan prosedur untuk memberikan persetujuan atas setiap pengecualian
5. Telah ada bukti yang jelas atas kinerja implementasi selera risiko yang baik dalam penerapan selera risiko di tingkat perusahaan, di antaranya:
1) Adanya 5-10 prinsip high-level yang dapat ditindaklanjuti yang menentukan pendekatan keseluruhan organisasi terhadap risiko
2) 5-10 pernyataan kualitatif, terkait dengan prinsip high-level, yang membatasi pengambilan risiko atau komitmen pada tindakan tertentu
3) 10-15 metrik & indikator utama perusahaan dengan batasan, terkait langsung dengan prinsip high-level
6. Telah ada bukti yang jelas atas kinerja implementasi selera risiko yang baik dalam penerapan selera risiko di tingkat setiap jenis risiko, di antaranya:
1) Pernyataan kuantitatif dan kualitatif selera risiko untuk setiap jenis risiko
2) 30-50 metrik khusus untuk setiap jenis risiko dan indikator utama dengan batasannya, terhubung ke metrik perusahaan dan metrik risiko utama
3) 15-25 pernyataan kualitatif khusus untuk setiap jenis risiko yang membatasipengambilan risiko (misal Kami tidak terlibat dalam proprietary tradingâ€™) atau berkomitmen pada tindakan tertentu (misal Kami terus memantau inovasi produk pesaing)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.1', 'C.1.25');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.26_1', '1. Beberapa pernyataan selera risiko telah disampaikan kepada pemangku kepentingan eksternal namun dalam konteks ad-hoc dan kurang dilakukan penjelasan', 1, 'C.1', 'C.1.26');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.26_2', '1. Telah ada komunikasi yang jelas kepada pemangku kepentingan eksternal mengenai semua selera risiko, namun penyampaian selera risiko belum dilakukan secara sistematis atau rutin
2. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.1', 'C.1.26');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.26_3', '1. Selera dan strategi risiko adalah bagian inti dari komunikasi investor dan pemangku kepentingan eksternal lainnya (misal tercantum pada laporan tahunan)
2. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.1', 'C.1.26');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.26_4', '1. Selera dan strategi risiko adalah bagian inti dari komunikasi investor dan pemangku kepentingan eksternal lainnya (misal tercantum pada laporan tahunan)
2. Pemangku kepentingan utama memahami dan menerima selera dan strategi risiko.
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.1', 'C.1.26');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.1.26_5', '1. Selera dan strategi risiko adalah bagian inti dari komunikasi investor dan pemangku kepentingan eksternal lainnya (misal tercantum pada laporan tahunan)
2. Pemangku kepentingan utama memahami dan menerima selera dan strategi risiko
3. Dilakukan pembahasan secara aktif mengenai selera dan strategi risiko bersama pemangku kepentingan utama (misal dibahas dalam rapat triwulanan pemegang saham).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.1', 'C.1.26');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.27_1', '1. Telah ada kerangka rencana mitigasi risiko informal yang masih dalam cakupan high- level dan belum dijelaskan secara mendetail (sesuai dengan jenis-jenis risiko utama), namun
belum ada rencanakontingensi formal di perusahaan
', 1, 'C.2', 'C.2.27');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.27_2', '1. Telah ada pemahaman yang seragam mengenai risiko-risiko utama di seluruh lini perusahaan
2. Telah ada sejumlah kebijakan penanganan risiko utama yang bersifat ad-hoc
3. Belum ada garis tanggung jawab yang jelas dariDirektur Utama ke Lini Pertama
4. Telah ada kebijakan risiko namun belum lengkap atau diperbarui
5. Terbatasnya rencana kontingensi (misal belum ada langkah tindak lanjut spesifik
6. Terbatasnya proses kaji ulang dan perbaikan
7. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP', 2, 'C.2', 'C.2.27');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.27_3', '1. Perusahaan memiliki kebijakan risiko yang meliputi:
1) Telah ada kepemilikan dan tanggung jawab yang jelas untuk mengelola risiko-risiko utama
2) Telah ada penanggung jawab yang jelas dan memiliki kapabilitas yangditunjuk untuk mengelola setiap risiko utama
3) Telah ada garis tanggung jawab yang jelas dari Direktur Utama ke Lini Pertama untuk setiap risiko utama
2. Telah ada proses/alur logis untuk mengelola beberapa risiko utama sesuai dengan definisi selera risiko, namun proses-proses tersebut belum sepenuhnya lengkap atau belum diperbarui
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.2', 'C.2.27');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.27_4', '1. Perusahaan memiliki kebijakan risiko yang meliputi:
1) Telah ada kepemilikan dan tanggung jawab yang jelas untuk mengelola risiko- risiko utama
2) Telah ada penanggung jawab yang jelas dan memiliki kapabilitas yang ditunjuk untuk mengelola setiap risiko utamao Telah ada garis tanggung jawab yang jelas dari Direktur Utama ke Lini Pertama untuk setiap risiko utama
2. Telah ada kebijakan dan proses yang komprehensif untuk mengelola setiap risiko utama, misal:
1) Telah ada SOP asesmen risiko, prioritisasi, mitigasi, monitoring, sistem peringatan dini, dan metrik yang terperinci
2) Telah ada kebijakan risiko dan kepatuhan di tingkat grup dilengkapi kebijakan tingkat lokal/unit/anak perusahaan untuk mencakup seluruh risiko relevan
3. Telah ada kaji ulang dan perbaikan proses Manajemen Risiko, termasuk:
1) Telah ada feedback sistematis dari â€œnear-missesâ€ sampai dengan perbaikan proses
2) Usulan revisi dokumen kebijakan dikomunikasikan ke pemangku kepentingan relevan di seluruh Lini Pertahanan
3) Memastikan tidak adanya ambiguitas peran dan tanggung jawab yang tercantum dalam kebijakan risiko
4) Memastikan bahwa kebijakan risiko diturunkan menjadi Standar dan Prosedur
4. Kebijakan memuat rencana kontingensi yang terperinci dan terdefinisi dengan baik, dengan alur spesifik atas langkah yang dibutuhkan
5. Kebijakan dikaji ulang secara rutin (sekurang-kurangnya satu kali dalam setahun)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.2', 'C.2.27');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.27_5', '1. Telah ada garis tanggung jawab yang jelas dari Direktur Utama ke Lini Pertama untuk setiap risiko utama
2. Telah ada kebijakan dan proses yang komprehensif untuk mengelola setiap risiko utama, misal:
1) Telah ada SOP asesmen risiko, prioritisasi, mitigasi, monitoring, sistem peringatan dini, dan metrik yang terperinci
2) Telah ada kebijakan risiko dan kepatuhan di tingkat grup dilengkapi kebijakan tingkat lokal/unit/anak perusahaan untuk mencakup seluruh risiko relevan
3. Telah ada kaji ulang dan perbaikan proses Manajemen Risiko, termasuk:
1) Telah ada feedback sistematis dari â€œnear- missesâ€ sampai dengan perbaikan proses
2) Usulan revisi dokumen kebijakan dikomunikasikan ke pemangku kepentingan relevan di seluruh Lini Pertahanan
3) Memastikan tidak adanya ambiguitas peran dan tanggung jawab yang tercantum dalam kebijakan risiko
4) Memastikan bahwa kebijakan risiko diturunkan menjadi Standar dan Prosedur
4. Kebijakan memuat rencana kontingensi yang terperinci dan terdefinisi dengan baik, dengan alur spesifik atas langkah yang dibutuhkan
5. Kebijakan dikaji ulang secara rutin (sekurang-kurangnya satu kali dalam setahun)
6. Setiap pegawai memahami dan menerima peran dan tanggung jawabnya yang berkaitan dengan kebijakan dan proses pengelolaan risiko-risiko utama, contohnya melalui:
1) Pelatihan khusus yang mencakup kebijakan yang berkaitan dengan risiko dan kontrol (misal modul pelatihan elektronik)
2) Forum reguler mengenai pembaruan terkini mengenai kebijakan risiko organisasi Program penjangkauan untuk mendorong pegawai agar berani mengungkap setiap pelanggaran kebijakan
3) Matriks RACI (Responsible, Accountable, Consulted, Informed) yang ditetapkan untuk kebijakan yang dikeluarkan
7. Tidak ditemukan kekurangan serius dalam proses-proses yang berkaitan dengan pengelolaan risiko-risiko utama
8. Fungsi Risiko secara rutin memanfaatkan analisis yang relevan dan terperinci dalam memberikan wawasan terkait arah kegiatan usaha, misal:
1) Kebijakan perencanaan terintegrasi
2) Kebijakan stress-testing
3) Forecasting analysis
4) Horizon scanning analysis
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'C.2', 'C.2.27');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.28_1', '1. Telah ada beberapa proses dan kontrol risiko, namun belum formal
2. Belum ada kebijakan dan prosedur untuk memitigasi peristiwa- peristiwa risiko penting yang diformalkan dalam kebijakan/prosedur baku
3. Namun telah ada prosedur informal yang didasarkan oleh perencanaan ad- hoc/analisis post- mortem peristiwa risikoyang sudah terjadi sebelumnya
4. Prosedur terkait risiko telah disosialisasikan di perusahaan secara ad-hoc, namun sosialisasinya tidak terstruktur
', 1, 'C.2', 'C.2.28');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.28_2', '1. Telah ada prosedur formal untuk memitigasi peristiwa-peristiwa risiko penting, namun belum semua kontrol risiko diformalkan dalam bentuk prosedur baku
2. Prosedur terkait risiko di komunikasikan ke seluruh lini perusahaan
3.  BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.2', 'C.2.28');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.28_3', '1. Telah ada proses dan kontrol risiko untuk setiap elemen dalam kerangka ERM, bersifat formal dan secara efektif dikomunikasikan ke seluruh lini perusahaan
2. Kontrol risiko sekurang- kurangnya memuat metode untuk mengontrol risiko keberlangsungan bisnis, dan mempertimbangkan paparan risiko dan selera risiko perusahaan
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yangbersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.2', 'C.2.28');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.28_4', '1. Prosedur risiko dan standar pendukungnya secara efektif tertanam dan diterapkan di perusahaan, termasuk:
1) Prosedur risiko yang diterapkan pada setiap proses bisnis yang berkaitan dengan risiko-risiko material perusahaan
2) Telah ada pemodelan proses/dokumentasi proses yang tepat
3) Mitigasi/pengendalian risiko diidentifikasi dalam proses (misal terdapat pelatihan kebijakan yang bersifat wajib sebelum melakukan kegiatan bisnis berisiko tinggi), termasuk setiap kegiatan self- assurance
2. Kontrol risiko meliputi metode untuk mengontrol risiko keberlangsungan bisnis dan mempertimbangkan paparan risiko
dan selera risiko perusahaan, termasuktitik pemicu (trigger point) yang didefinisikan sebelumnya untuk pelaksanaan prosedur kontingensi
3. Telah ada kebijakan dan prosedur untuk melindungi informasi digital dari akses oleh pihak yang tidak berwenang, kerusakan data, atau pencurian data di seluruh siklus pengolahan data, yang mencakup setiap aspek keamanan informasi mulai dari keamanan fisik perangkat keras dan perangkat penyimpanan hingga aplikasi administrasi dan kontrol akses, kebijakan dan prosedur organisasi
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.2', 'C.2.28');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.28_5', 'sebelumnya untuk pelaksanaan prosedur kontingensi
1. Kebijakan dan prosedur risiko diimplementasikan secara efektif, dan keefektifannya dikaji secara periodik melalui kegiatan yang terdokumentasi. Penilaian keefektifan pelaksanaan prosedur dan pengendalian dapat mencakup :
1) Identifikasi pegawai utama yang bertanggung jawab/mampu mengoperasikan prosedur dan pengendalian
2) Evaluasi desain pengendalian (misal pengujian langsung, lokakarya) dan analisis kemungkinan kegagalan pengendalian untuk memitigasi risiko
3) Peninjauan laporan audit untuk mengetahui adanya kekurangan prosedur
4) Identifikasi KPI untuk pemantauan keefektifan proses/prosedur yang sedang berlangsung (outcome-based)
2. Telah ada kebijakan dan prosedur untuk melindungi informasi digital dari akses oleh pihak yang tidak berwenang, kerusakan data, atau pencurian data di seluruh siklus pengolahan data, yang mencakup setiap aspek keamanan informasi mulai dari keamanan fisik perangkat keras dan perangkat penyimpanan hingga aplikasi administrasi dan kontrol akses, kebijakan dan prosedur organisasi
3. Keefektifan didukung oleh bukti kinerja penurunan/pemertahanan jumlah kasus dan kerugian yang disebabkan oleh kebocoran data secara year-on-year
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.2', 'C.2.28');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.29_1', '1. Perusahaan belum memiliki rencanakeberlangsungan bisnis dan rencana kontingensi yang telah dikodifikasi dalam bentuk kebijakan
2. Namun, telah ada kerangka rencana keberlangsungan bisnis/kontingensi secara informal (misal didasarkan oleh pengalaman perusahaan menangani skenario krisis di masa lalu)', 1, 'C.2', 'C.2.29');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.29_2', '1. Telah ada rencana kontingensi namun hanya untuk memenuhi persyaratan minimum regulator.
2. Rencana kemungkinan belum bisa ditindaklanjuti (misal rencana bersifat umum, tanpa trigger point dan nilai ambang batas).
3. Tanggung jawab belum ditetapkan dengan jelas (misal bentuk rantai komando dalam keadaan krisis).
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.2', 'C.2.29');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.29_3', '1. Telah ada rencana yang dapat ditindaklanjuti (langkah-langkahtindakan, dengan trigger point, nilai ambang batas, serta langkah yang harus dilakukan) terkait keberlangsungan bisnis dan manajemen krisis.
2. Telah ada dokumentasi mengenai:
1) Rencana manajemen krisis (alur rantai komando dalam kondisi krisis, proses untuk menangani tugas-tugas utama)
2) Rencana kontingensi kas/likuiditas)
3. Rencana kontingensi disusun melebihi kriteria yang diprasyaratkan regulator.
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.2', 'C.2.29');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.29_4', '1. Telah ada rencana yang dapat ditindaklanjuti (langkah-langkah tindakan,dengan trigger point, nilai ambang batas, serta langkah yang harus dilakukan) terkait keberlangsungan bisnis dan manajemen krisis.
2. Telah ada dokumentasi mengenai:
1) Rencana manajemen krisis (alur rantai komando dalam kondisi krisis, proses untuk menangani tugas-tugas utama)
2) Rencana kontingensi kas/likuiditas)
3. Rencana kontingensi disusun melebihi kriteria yang diprasyaratkan regulator.
4. Dilakukan pengujian terhadap rencana keberlangsungan bisnis dan manajemen krisis secara berkala (misal satu kali dalam setahun) yang melibatkan manajemen senior untuk mereviu, mengkritisi dan memperbaiki kualitasnya, contohnya:
1) Telah ada simulasi kejadian krisis yang dilakukan tahunan
2) Telah ada pengujian rencana kontingensi oleh pihak independen (misal audit ISO 22301:2019)
3) Rencana BCM ditingkatkan secara berkala berdasarkan praktik terbaik terbaru
4) Tinjauan post-mortem atas simulasi dan penggabungan pembelajaran
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.2', 'C.2.29');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.29_5', 'dengan trigger point, nilai ambang batas, serta langkah yang harus dilakukan) terkait keberlangsungan bisnis dan manajemen krisis.
1. Telah ada dokumentasi mengenai:
2. Rencana manajemen krisis (alur rantai komando dalam kondisi krisis, proses untuk menangani tugas-tugas utama)
3. Rencana kontingensi kas/likuiditas
4. Rencana kontingensi disusun melebihi kriteria yang diprasyaratkan regulator.
5. Dilakukan pengujian terhadap rencana keberlangsungan bisnis dan manajemen krisis secara berkala (misal setahun dua kali) yang melibatkan manajemen senior untuk mereviu, mengkritisi dan memperbaiki kualitasnya, contohnya:
1) Telah ada simulasi kejadian krisis yang dilakukan tahunan
2) Telah ada pengujian rencana kontingensi oleh pihak independen (misal audit ISO 22301:2019)
3) Rencana BCM ditingkatkan secara berkala berdasarkan praktik terbaik terbaru
4) Tinjauan post-mortem atas simulasi dan penggabungan pembelajaran
6. Setiap pemangku kepentingan (termasuk Unit Bisnis) memahami dan menerima peran dan tanggung jawabnya dalam kondisi krisis melalui change management, contohnya
1) Jajaran pimpinan telah dilatih tentang manajemen keberlangsungan bisnis
2) Tim operasional menerima pelatihan manajemen keberlangsungan bisnis
3) rencana keberlangsungan bisnis tingkat fungsi diadaptasi berdasarkan rencana keberlangsungan bisnis tingkat perusahaan
4) Manajemen keberlangsungan bisnis untuk setiap lini didefinisikan dan diimplementasikan (model operasi krisis)Rencana keberlangsungan bisnis pernah diterapkan dengan baik pada kejadian- kejadian krisis di masa lampau
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP', 5, 'C.2', 'C.2.29');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.30_1', '1. Sesi reviu pernah digunakan untuk membenahi beberapa prosedur dan SOP namun dilaksanakan secara ad-hoc dan frekuensi yang kurang rutin (misal 2-3 tahun sekali)', 1, 'C.2', 'C.2.30');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.30_2', '1. Telah ada reviu informal dan/atau parsial terhadap prosedur dalam beberapa waktu atau saat diprasyaratkan oleh regulator.
2. Reviu prosedur dilakukan di level unit kerja, dengan sedikit keterlibatan dari jajaran manajemen senior.
3. Belum dilakukan stress test pada prosedur dan SOP
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.2', 'C.2.30');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.30_3', '1. Dilakukan reviu dan stress test rutin (misal tahunan) untuk sebagian (namun tidak semua) prosedur dan SOP utama yang berkaitan dengan risiko teratas perusahaan, serta dilakukan identifikasi area-area perbaikan.
2. Jajaran manajemen senior terlibat secara aktif dalam melakukan reviu, mengkritisi, dan memperbaiki proses melalui stress test, meskipun sebagian besar pelaksanaannya masih dilakukan oleh unit kerja
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP', 3, 'C.2', 'C.2.30');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.30_4', '1. Dilakukan reviu dan stress test rutin (misal tahunan) terhadap sebagian besar prosedur dan SOP utama yang berkaitan dengan risiko teratas perusahaan, serta dilakukan identifikasi area-area perbaikan.
2. Jajaran manajemen senior terlibat secara aktif dalam melakukan reviu, mengkritisi, dan memperbaiki proses melalui stress test setidaknya satu kali dalam setahun, misal:
1) Terlibat dalam simulasi krisis/workshops
2) Terlibat dalam identifikasi titik-titik lemah proses/root-cause analysis
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.2', 'C.2.30');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.2.30_5', '1. Dilakukan reviu dan stress test rutin (misal tahunan) terhadap sebagian besar prosedur dan SOP utama yang berkaitan dengan risiko teratas perusahaan , serta dilakukan identifikasi area-area perbaikan
2. Jajaran manajemen senior terlibat secara aktif dalam melakukan reviu, mengkritisi, dan memperbaiki proses melalui stress test setidaknya satu kali dalam setahun, misal:
1) Terlibat dalam simulasi krisis/workshops
2) Terlibat dalam identifikasi titik-titik lemah proses/root-cause analysis
3. Dilakukan perbaikan berkesinambungan terhadap prosedur, benchmarking terhadap praktik terbaik, serta sosialisasi ke seluruh lini perusahaan sepanjang waktu.
4. Telah ada database yang mudah diakses/"sumber kebenaran" terpusat untuk SOP terbaru (misal intranet, solusi manajemen SOP, kontrol dokumen)
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.2', 'C.2.30');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.3.31_1', '1. Belum ada departemen/divisi kepatuhan yang dibentuk secara formal dan independen,namun telah ada dalam bentuk unit kerja
2. Sebagian besar proses kepatuhan belum secara jelas terpisah dari proses bisnis sehari-hari (misal tidak ada proses tersendiri untuk kaji ulang/reviu)', 1, 'C.3', 'C.3.31');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.3.31_2', '1. Telah ada departemen/divisi kepatuhan yang dibentuk secara formal
2. Telah ada beberapa kasus di mana proses kepatuhan belum secara jelas terpisah dari proses bisnis sehari-hari (misal tidak ada proses tersendiri untuk kaji ulang/reviu)
3. Belum ada pemisahan yang jelas antara divisi risiko (khususnya risiko operasional), kepatuhan dan audit
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.3', 'C.3.31');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.3.31_3', '1. Seluruh proses kepatuhan terpisah dari proses bisnis sehari-hari (misal terdapat proses tersendiri untuk kaji ulang/reviu), berfokus padapemenuhan persyaratan regulator
2. Telah ada pemisahan yang jelas antara peran dan tanggung jawab jabatan divisi risiko (khususnya risiko operasional) kepatuhan dan audit, contohnya:
1) Peninjauan bersama atas peran dan tanggung jawab yang telah dikodifikasi (misal kebijakan) untuk meminimalkan tumpang tindih dan memperjelas kepemilikan tugas dan kegiatan antara risiko, audit, dan kepatuhan
2) Rapat terdokumentasi untuk bersama-sama menyelaraskan prioritas inisiatif perbaikan/mengoordinasikan tindakan untuk menghindari duplikasi mitigasi/rencana kerja
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'C.3', 'C.3.31');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.3.31_4', '1. Telah ada pemisahan yang jelas antara peran dan tanggung jawab jabatan divisi risiko (khususnya risiko operasional) kepatuhan dan audit, contohnya:
1) Peninjauan bersama atas peran dan tanggung jawab yang telah dikodifikasi (misal kebijakan) untuk meminimalkan tumpang tindih dan memperjelas kepemilikan tugas dan kegiatan antara risiko, audit, dan kepatuhan
2) Rapat terdokumentasi untuk bersama- sama menyelaraskan prioritas inisiatif perbaikan/mengoordinasikan tindakan untuk menghindari duplikasi mitigasi/rencana kerja
2. Kegiatan kepatuhan berfokus pada pemenuhan kebijakan perusahaan selain pemenuhan persyaratan regulator
3. Perusahaan menerapkan pendekatan bottom-up untuk memeriksa pemenuhan persyaratan kepatuhan dan statusnya saat ini terhadap persyaratan regulator dan praktik terbaik industri, contohnya:
1) Fungsi kepatuhan memastikan tersedianya katalog kontrol bottom-up yang komprehensif (misal untuk risiko siber)
2) Bukti yang jelas mengenai penilaian dampak secara komprehensif atas peraturan baru terhadap kebijakan/prosedur yang ada
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.3', 'C.3.31');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.3.31_5', '1. Telah ada pemisahan yang jelas antara peran dan tanggung jawab jabatan divisi risiko (khususnya risiko operasional) kepatuhan dan audit, contohnya:
1) Peninjauan bersama atas peran dan tanggung jawab yang telah dikodifikasi (misal kebijakan) untuk meminimalkan tumpang tindih dan memperjelas kepemilikan tugas dan kegiatan antara risiko, audit, dan kepatuhan
2) Rapat terdokumentasi untuk bersama- sama menyelaraskan prioritas inisiatif perbaikan/mengoordinasikan tindakan untuk menghindari duplikasi mitigasi/rencana kerja
2. Kegiatan kepatuhan berfokus pada pemenuhan kebijakan perusahaan selain pemenuhan persyaratan regulator
3. Perusahaan menerapkan pendekatan bottom-up untuk memeriksa pemenuhan persyaratan kepatuhan dan statusnya saat ini terhadap persyaratan regulator dan praktik terbaik industri, contohnya:
1) Fungsi kepatuhan memastikan tersedianya katalog kontrol bottom-up yang komprehensif (misal untuk risiko siber)
2) Bukti yang jelas mengenai penilaian dampak secara komprehensif atas peraturan baru terhadap kebijakan/prosedur yang ada
4. Telah ada keterkaitan yang harmonis antara proses risiko operasional dengan proses kepatuhan/audit (misal identifikasi, pengukuran, pengelolaan limit risiko, pemanfaatan taksonomi risiko umum dan sistem informasi umum)
5. Kepatuhan terhadap kebijakan perusahaan diperiksa secara rutin maupun secara acak sepanjang tahun
6. Bukti bahwa fungsi kepatuhan dapat menjalankan peran sebagai advisory yang efektif bila diperlukan, misalnya:                                                                                                                                                                                                                          1) Secara konsisten memberikan saran berkualitas kepada mitra bisnis, termasuk dalam menangani isu-isu sulit (misal menyediakan informasi yang tersedia dan disesuaikan dengan kebutuhan bisnis mengenai persyaratan Kepatuhan, menerjemahkan persyaratan regulasi ke dalam rekomendasi yang dapat ditindaklanjuti dan praktis)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.3', 'C.3.31');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.4.32_1', '1. Telah ada konsep ERM informal yang mencakup sejumlah langkah Manajemen Risiko namun belum didokumentasikan sepenuhnya di perusahaan (misal belum diformalkan dalam bentuk kebijakan Manajemen Risiko)', 1, 'C.4', 'C.4.32');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.4.32_2', '1. Perusahaan memiliki kerangka ERM yang mencakup sejumlah langkah Manajemen Risiko, namun belum memenuhi standar internasional
2. Telah ada inisiatif untuk melakukan transformasi kerangka ERM perusahaan agar memenuhi Standar internasional, misalnya ISO 31000:2018
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'C.4', 'C.4.32');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.4.32_3', '1. Perusahaan memiliki kerangka ERM yang mencakup semua langkah- langkah besar Manajemen Risiko, dan memenuhi standar internasional seperti ISO 31000:2018
2. Namun, kerangka ERM belum ditinjau dan disesuaikan secara rutin (misal setiap tahun) untuk mencerminkan perubahan risiko dan kegiatan usaha
3. Kemungkinan terdapat kerangka transformasi ERM namun hanya sebagai tindak lanjut dari pemenuhan persyaratan regulator (bukan menjadi bagian dari perbaikan berkelanjutan)
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu
100-105% dari target RKAP
', 3, 'C.4', 'C.4.32');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.4.32_4', '1. Perusahaan memiliki kerangka ERM yang mencakup semua langkah-langkah besar manajemen risiko, dan memenuhi standar internasional seperti ISO 31000:2018
2. Perusahaan memiliki rencana transformasi ERM yang mencakup semua inisiatif dan mendetail (misal tata waktu, keperluan sumber daya, pengawasan program, dan sebagainya)
3. Ruang lingkup transformasi ini melampaui persyaratan regulator (misal menjadi bagian dari perbaikan berkelanjutan)
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'C.4', 'C.4.32');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.4.32_5', '1. Perusahaan memiliki kerangka ERM yang mencakup semua langkah-langkah besar Manajemen Risiko, dan memenuhi standar internasional seperti ISO 31000:2018
2. Perusahaan memiliki rencana transformasi ERM yang mencakup semua inisiatif dan mendetail (misal tata waktu, keperluan sumber daya, pengawasan program, dan sebagainya)
3. Ruang lingkup transformasi ini melampaui persyaratan regulator (misal menjadi bagian dari perbaikan berkelanjutan)
4. Kerangka ERM ditinjau dan disesuaikan secara rutin (paling sedikit satu kali dalam setahun) untuk mencerminkan perubahan risiko dan kegiatan usaha
5. Telah ada tim khusus yang bertanggung jawab atas pelaksanaan rencana transformasi dan kesuksesannya. Unit Bisnis dan fungsi lainnya terlibat dalam rencana transformasi ini (misal dalam tahap perancangan dan pelaksanaannya)
6. Telah ada hasil penilaian benchmarking terhadap praktik terbaik global/eksternal untuk mengidentifikasi kesenjangan dan area yang perlu ditingkatkan, serta bukti penyesuaian kerangka ERM yang telah
dilakukan berdasarkan hasil analisisPengukuran yang jelas atas estimasi "value-at-stake" yang akan diperoleh dari program transformasi ERM yang dimonitor ketika program diimplementasikan (fokus ERM bergeser dari "kepatuhan" ke "value captureâ€)
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'C.4', 'C.4.32');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.5.33_1', '1. Terdapat struktur organisasi yang menggambarkan secara jelas kegiatan usaha BUMN
2. Telah ditetapkan jalur pelaporan dan pemisahan fungsi yang jelas dari lini pertama kepada lini kedua;
3. Terdapat kecukupan prosedur untuk memastikan kepatuhan BUMN terhadap ketentuan peraturan perundang-undangan
4. Belum ada sistem pengendalian intern sesuai dengan jenis dan tingkat Risiko yang melekat pada kegiatan usaha BUMN;
5. Belum ditetapkan wewenang dan tanggung jawab untuk pemantauan kepatuhan kebijakan dan prosedur Manajemen Risiko serta penetapan strategi Risiko Dokumentasi belum secara lengkap dan memadai terhadap prosedur operasional, cakupan, dan temuan audit, serta tanggapan Direksi terhadap hasil audit
6. pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
7. Telah dikaji ulang atau reviu yang efektif, independen, dan objektif terhadap prosedur penilaian kegiatan operasional BUMN;
', 1, 'C.5', 'C.5.33');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.5.33_2', '1. Terdapat struktur organisasi yang menggambarkan secara jelas kegiatan usaha BUMN
2. Telah ditetapkan jalur pelaporan dan pemisahan fungsi yang jelas dari lini pertama kepada lini kedua;
3. Terdapat kecukupan prosedur untuk memastikan kepatuhan BUMN terhadap ketentuan peraturan perundang- undangan
4. Terdapat sistem pengendalian intern sesuai dengan jenis dan tingkat Risiko yang melekat pada kegiatan usaha BUMN;
5. Telah ditetapkan wewenang dan tanggung jawab untuk pemantauan kepatuhan kebijakan dan prosedur Manajemen Risiko serta penetapan strategi Risiko
6. Dokumentasi belum secara lengkap danmemadai terhadap prosedur operasional, cakupan, dan temuan audit, serta tanggapan Direksi terhadap hasil audit
7. pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
8. Telah dikaji ulang atau reviu yang efektif, independen, dan objektif terhadap prosedur penilaian kegiatan operasional BUMN;
9. Telah dilakukan pengujian dan kaji ulang atau reviu yang memadai terhadap sistem informasi Manajemen Risiko;
10. Telah dilakukan verifikasi dan kaji ulang atau reviu secara berkala dan berkesinambungan terhadap penanganan kelemahan BUMN yang bersifat material dan tindakan Direksi untuk memperbaiki penyimpangan yang terjadi.
11. Belum dilakukan tindak lanjut atas hasil kaji ulang/ review kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang
bersifat material.
', 2, 'C.5', 'C.5.33');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.5.33_3', '1. Pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
2. Telah dilakukan kaji ulang atau reviu yang efektif, independen, objektif terhadap prosedur penilaian kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang bersifat material. Kaji ulang telah dilakukan secara berkala dan berkesinambungan
3. Telah dilakukan pengujian dan kaji ulang atau reviu yang memadai terhadap sistem informasi Manajemen Risiko;
4. Telah dilakukan verifikasi dan kaji ulang atau reviu secara berkala dan berkesinambungan terhadap penanganan kelemahan BUMN yang bersifat material dan tindakan Direksi untuk memperbaiki penyimpangan yang terjadi.
5. Tindaklanjut atas hasil kaji ulang/ review kegiatan operasional BUMN, sistem informasi Manajemen Risiko, penanganan kelemahan BUMN yang bersifat material telah selesai dilakukan sebagian dan terdapat dokumentasi atas progres dan evidence atas tindak lanjut tersebut.', 3, 'C.5', 'C.5.33');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.5.33_4', '1. Terdapat struktur organisasi yang menggambarkan secara jelas kegiatan usaha BUMN
2. Telah ditetapkan jalur pelaporan dan pemisahan fungsi yang jelas dari lini pertama kepada lini kedua;
3. Terdapat kecukupan prosedur untuk memastikan kepatuhan BUMN terhadap ketentuan peraturan perundang-undangan
4. Terdapat sistem pengendalian intern sesuai dengan jenis dan tingkat Risiko yang melekat pada kegiatan usaha BUMN;
5. Telah ditetapkan wewenang dan tanggung jawab untuk pemantauan kepatuhan kebijakan dan prosedur Manajemen Risiko serta penetapan strategi Risiko dan pelaksanaannya telah dilakukan secara optimal
6. Dokumentasi telah lengkap dan memadai terhadap prosedur operasional, cakupan, dan temuan audit, serta tanggapan Direksi terhadap hasil audit
7. Pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
8. Telah dilakukan kaji ulang atau reviu yang efektif, independen, objektif terhadap prosedur penilaian kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang bersifat material.                                                                                                                                                                                                                                                                                                                                                                                                 9. Kaji ulang telah dilakukan secara berkala dan berkesinambungan  
10. Telah dilakukan pengujian dan kaji ulang atau reviu yang memadai terhadap sistem informasi Manajemen Risiko;
11. Telah dilakukan verifikasi dan kaji ulang atau reviu secara berkala dan berkesinambungan terhadap penanganan kelemahan BUMN yang bersifat material dan tindakan Direksi untuk memperbaiki penyimpangan yang terjadi.
12. Telah dilakukan proses tindaklanjut atas hasil kaji ulang/ review kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang bersifat material dengan telah terdapat dokumentasi atas progres dan evidence atas tindak lanjut tersebut. Penyelesaian tindaklanjut atas hasil review/ temuan dilakukan secara tuntas (100%).
13. Pengendalian Intern yang efektif tercermin pada pencapaian kinerja perusahaan yang sesuai target dan melindungi aset perusahaan
', 4, 'C.5', 'C.5.33');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('C.5.33_5', '1. Terdapat struktur organisasi yang menggambarkan secara jelas kegiatan usaha BUMN
2. Telah ditetapkan jalur pelaporan dan pemisahan fungsi yang jelas dari lini pertama kepada lini kedua;
3. Terdapat kecukupan prosedur untuk memastikan kepatuhan BUMN terhadap ketentuan peraturan perundang-undangan
4. Terdapat sistem pengendalian intern sesuai dengan jenis dan tingkat Risiko yang melekat pada kegiatan usaha BUMN;
5. Telah ditetapkan wewenang dan tanggung jawab untuk pemantauan kepatuhan kebijakan dan prosedur Manajemen Risiko serta penetapan strategi Risiko dan pelaksanaannya telah dilakukan secara optimal
6. Dokumentasi telah lengkap dan memadai terhadap prosedur operasional, cakupan, dan temuan audit, serta tanggapan Direksi terhadap hasil audit
7. Pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
8. Telah dilakukan kaji ulang atau reviu yang efektif, independen, objektif terhadap prosedur penilaian kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang
9. Dokumentasi telah lengkap dan memadai terhadap prosedur operasional, cakupan, dan temuan audit, serta tanggapan Direksi terhadap hasil audit Pelaporan keuangan dan kegiatan operasional telah dilakukan namun belum akurat dan tepat waktu;
10. Telah dilakukan kaji ulang atau reviu yang efektif, independen, objektif terhadap prosedur penilaian kegiatan operasional BUMN, sistem informasi Manajemen Risiko, dan penanganan kelemahan BUMN yang bersifat material. Kaji ulang telah dilakukan secara berkala dan berkesinambungan
11. Telah dilakukan pengujian dan kaji ulang atau reviu yang memadai terhadap sistem informasi Manajemen Risiko;
12. Telah dilakukan verifikasi dan kaji ulang atau reviu secara berkala dan berkesinambungan terhadap penanganan kelemahan BUMN yang bersifat material dan tindakan Direksi untuk memperbaiki penyimpangan yang terjadi.
13. Tindaklanjut atas hasil kaji ulang/ review kegiatan operasional BUMN, sistem informasi Manajemen Risiko, penanganan kelemahan BUMN yang bersifat material telah selesai dilakukan sebagian dan terdapat dokumentasi atas progres dan evidence atas tindak lanjut tersebut.
', 5, 'C.5', 'C.5.33');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.1.34_1', '1. Telah ada taksonomi risiko informal yang digunakan dalam identifikasi dan analisis risiko utama, namun belum dilakukan standardisasi taksonomi (misal Unit Bisnis/divisi berbeda menggunakan penamaan dan klasifikasi risiko yang berbeda) dan belum dilakukan formalisasi dalam kebijakan pusat
', 1, 'D.1', 'D.1.34');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.1.34_2', '1. Telah ada taksonomi risiko dan mencakup sejumlah risiko dasar (taksonomi mencakup risiko regulasi dan finansial)
2. Telah ada proses identifikasi risiko, yang utamanya dilakukan dengan pendekatan bottom-up, setidaknya mempertimbangkan risiko-risiko yang melekat pada proses bisnis di BUMN dan target risiko residual.
3. Proses ini dilakukan tahunan oleh Unit Bisnis, dengan paparan risiko yang tergambar dari risk register
4. Telah ada beberapa risk register (dari setiap Unit Bisnis)
5. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'D.1', 'D.1.34');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.1.34_3', '1. Telah ada taksonomi risiko agregasian yang terhubung dengan bisnis, dan mencakup risiko-risiko dasar dan risiko kompleks, serta mencakup risiko yang akan muncul (emerging risk)
2. Telah ada metodologi identifikasi risiko, yang setidaknya mempertimbangkan risiko- risiko yang melekat pada proses bisnis di BUMN dan target risiko residual secara bottom-up; namun juga dilengkapi dengan pendekatan top-down, yang biasanya dilakukan di setiap triwulan
3. Taksonomi risiko diterapkan khususnya untuk perusahaan induk
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'D.1', 'D.1.34');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.1.34_4', '1. Telah ada taksonomi risiko agregasian yang terhubung dengan bisnis, dan mencakup risiko-risiko dasar dan risiko kompleks, serta mencakup risiko yang akan muncul (emerging risk) termasuk risiko-risiko masa depan (forward-looking risks) (misal ESG, siber)
2. Telah ada metodologi identifikasi risiko yang setidaknya mempertimbangkan risiko-risiko yang melekat pada proses bisnis di BUMN dan target risiko residual secara bottom-up di level bisnis, dan top- down yang dipimpin tim pusat. Identifikasi risiko dilakukan melalui pendekatan top- down berdasarkan input dari tingkat Unit Bisnis dan didefinisikan di tingkat pusat
3. Taksonomi risiko kemungkinan belum diterapkan secara konsisten di seluruh anak perusahaan (jika relevan), meskipun pemetaan kerangka kerja taksonomi risiko yang berbeda mungkin ada
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'D.1', 'D.1.34');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.1.34_5', '1. mencakup risiko-risiko dasar dan risiko kompleks, serta mencakup risiko yang akan muncul (emerging risk) termasuk risiko- risiko masa depan (forward-looking risks) (misal ESG, siber)
2. Telah ada metodologi identifikasi risiko yang setidaknya mempertimbangkan risiko- risiko yang melekat pada proses bisnis di BUMN dan target risiko residual secara bottom-up di level bisnis, dan top-down yang dipimpin tim pusat. Identifikasi risiko dilakukan melalui pendekatan top-down berdasarkan input dari tingkat Unit Bisnis dan didefinisikan di tingkat pusat
3. Dilakukan pengkinian terhadap taksonomi risiko dan secara rutin dikaji ulang (sekurang-kurangnya satu kali dalam setahun) guna memastikan keterkiniannya dan tetap komprehensif terutama untuk mengetahui risiko yang muncul, misalnya melalui:
1) Benchmarking eksternal terhadap risk universe untuk industri/wilayah geografis
2) Tinjauan rutin (misal dua kali dalam setahun) dengan para manajer senior mengenai perubahan lingkungan (misal ekonomi, politik, regulasi) yang dapat berdampak pada taksonomi risiko
3) Mengadakan lokakarya untuk meninjau taksonomi risiko
4.Taksonomi risiko secara luas dan secara konsisten diterapkan di tiga Lini Pertahanan, serta terdapat kerangka dan sistem Manajemen Risiko Perusahaan yang holistik, misalnya:
1) Telah ada pemahaman dan pemanfaatan taksonomi risiko oleh Unit Bisnis dalam keseharian kegiatan usaha (misal pengambilan keputusan berbasis risiko)
2) Taksonomi risiko yang paling terkini digunakan dalam klasifikasi risiko dalam daftar risiko
3) Analisis risiko (misal dalam sistem informasi manajemen) menggunakantaksonomi risiko (misal untuk memfasilitasi agregasi)
4) Taksonomi risiko dapat digunakan untuk memfasilitasi penugasan tanggung jawab (mis, untuk kegiatan pengawasan)
5. Taksonomi risiko secara konsisten diterapkan di seluruh anak perusahaan (jika relevan)
6. Telah ada bukti yang jelas atas kinerja penerapan taksonomi risiko, di antaranya:
1) Telah ada taksonomi risiko yang komprehensif, biasanya 2-4 level dengan ~100-200 jenis risiko pada level yang paling granular
2) Level granularitas taksonomi risiko di setiap jenis risiko disesuaikan dengan kebutuhan dan kekritisan
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'D.1', 'D.1.34');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.35_1', '1. Telah ada kerangka dasar penilaian risiko secara informal dan kualitatif, namun belum diikutsertakan ke dalam kebijakan atau prosedur manajemen risiko
2. Penilaian risiko belum dilakukan secara rutin/ad-hoc', 1, 'D.2', 'D.2.35');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.35_2', '1. Telah ada penerapan metode yang bersifat umum dan kualitatif untuk proses Manajemen Risiko.
2. Secara umum belum ada kapabilitas untuk melakukan penilaian dampak risiko secara kuantitatif, meskipun telah dilakukan penilaian Kuantitatif untuk beberapa jenis risiko tertentu (seperti risiko keuangan)
3. Penilaian risiko dilaksanakan dua kali dalam satu tahun (misal penilaian awal danpenilaian terkini pertengahan tahun)
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'D.2', 'D.2.35');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.35_3', '1. Telah ada penerapan metode kuantitatif dan kualitatif untuk proses risiko (misal terdapat kriteria kuantitatif dan kualitatif untuk penilaian dampak), namun sebagian besar penilaian masih menggunakan metode kualitatif
2. Proses Penilaian risiko masih bersifat manual
3. Penilaian risiko dilaksanakan setiap triwulan (misal penilaian awal dan penilaian terkini setiap triwulan)
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapatberpengaruh terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'D.2', 'D.2.35');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.35_4', '1. Telah ada penerapan metode yang berimbang antara kuantitatif dan kualitatif untuk proses risiko
1) Telah ada kriteria kuantitatif dan kualitatif untuk penilaian dampak
2) Penerapan metode kualitatif melibatkan pengumpulan opini dari pakar internal (misal lokakarya, self- assessment)
3) Penerapan metode kuantitatif terutama melibatkan penggunaan data historis (misal basis data kejadian kerugian )
2. Telah ada evaluasi kesesuaian metode asesmen risiko setidaknya setiap tahun
3. Beberapa proses penilaian risiko dilakukan secara otomatis (misal pilot stage)
4. Metode risiko kuantitatif dan kualitatif mungkin tidak sepenuhnyaterstandardisasi/konsisten untuk semua jenis risiko di antara Unit Bisnis/anak perusahaan yang berbeda
5. Proses penilaian risiko telah dilaksanakan secara efektif, termasuk:
1) Penilaian dilaksanakan setidaknya setiap triwulan (misal penilaian awal dan penilaian terkini setiap triwulan)
2) Kerangka dan proses penilaian cukup efektif untuk menilai risiko, walaupun masih ada realisasi dampak kuantitatif dan kualitatif yang untuk beberapa jenis risiko yang melebihi dampak yang telah diperkirakan saat penilaian awal tahun
3) Kerangka dan proses penilaian telah dilakukan, namun masih ada beberapa realisasi peristiwa risiko signifikan yang belum dinilai pada saat penilaian awal tahun
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'D.2', 'D.2.35');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.35_5', '1. Telah ada penerapan metode yang berimbang antara kuantitatif dan kualitatif untuk proses risiko
1) Telah ada kriteria kuantitatif dan kualitatif untuk penilaian dampak
2) Penerapan metode kualitatif melibatkan pengumpulan opptini dari pakar internal (misal lokakarya, self-assessment ) dan pakar eksternal yaitu (perspektif â€œoutside- inâ€)
3) Penerapan metode kuantitatif melibatkan penggunaan data historis (misal loss event database), dilengkapi dengan data pasar dan perkiraan berwawasan ke depan lainnya
2. Telah ada evaluasi kesesuaian metode asesmen risiko secara lebih sering (yaitu lebih dari sekali setiap tahun) sebagai bagian dari peningkatan berkelanjutan dariproses asesmen risiko dan sebagian besar risiko utama dapat dinilai secara kuantitatif
3. Banyak proses penilaian risiko dilakukan secara otomatis, contohnya:
1) Batas kuantitatif/kualitatif (misal dari Risk Appetite Statement/Risk Capacity) dihubungkan ke proses asesmen risiko, ambang akan langsung terpicu saat terlampaui
2) Permintaan input data periodik otomatis (misal untuk input para ahli) atau penarikan data otomatis (misal untuk data historis) dan perekaman data sistem untuk memfasilitasi asesmen risiko secara kuantitatif/kualitatif
3) Otomatisasi diterapkan secara rutin untuk proses risiko (misal automatic credit underwriting di perbankan atau automated cyber controls status testing untuk infrastruktur TI)
4. Metode risiko kuantitatif dan kualitatif sepenuhnya terstandardisasi/konsisten di seluruh jenis risiko di antara Unit Bisnis/anak perusahaan yang berbeda untuk memfasilitasi agregasi dampak risiko
5. Proses penilaian risiko telah dilaksanakan secara efektif, termasuk:
1) Penilaian risiko dilaksanakan dua kali dalam satu tahun (misal penilaian awal dan penilaian terkini pertengahan tahun)
2) Kerangka dan proses penilaian efektif untuk menilai risiko, terbukti dari realisasi dampak kuantitatif dan kualitatif yang untuk sebagian besar jenis risiko tidak melebihi dampak yang telah diperkirakan saat penilaian awal tahun
3) Kerangka dan proses penilaian telah komprehensif, sehingga hampir tidak ada realisasi peristiwa risiko signifikan yang belum dinilai pada saat penilaian awal tahun
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu > 110% dari target RKAP
', 5, 'D.2', 'D.2.35');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.36_1', '1. Telah ada kerangka dasar penilaian risiko secara informal, namun belum diikutsertakan ke dalam kebijakan manajemen risiko', 1, 'D.2', 'D.2.36');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.36_2', '1. Telah ada kerangka dasar penilaian risiko secara formal dalam kebijakan manajemen risiko
2. Telah ada kerangka penilaian risiko, yang mencakup penilaian kemungkinan terjadinya risiko serta tingkat dampak (risk heatmap)
3. Belum dilaksanakan penilaian yang mempertimbangkan keefektifan proses/kontrol internal
4. Penilaian belum dilakukan secara rutin/ad-hoc
5. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'D.2', 'D.2.36');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.36_3', '1. Telah ada kerangka dasar penilaian risiko secara formal dalam kebijakan manajemen risiko
2. Telah ada kerangka penilaian risiko, yang mencakup penilaian kemungkinan terjadinya risiko serta tingkat dampak (risk heatmap)
3. Telah dilaksanakan penilaian yang mempertimbangkan keefektifan proses/kontrol internal
4. Penilaian risiko umumnya didefinisikan oleh Lini Kedua, namun implementasinya masih terlalu bergantung pada Lini Kedua dan kurang diterapkan oleh Lini Pertama
5. Penilaian dilaksanakan setidaknya dua kali dalam satu tahun (misal penilaian awal dan penilaian terkini pertengahan tahun)
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'D.2', 'D.2.36');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.36_4', '1. Telah ada kerangka dasar penilaian risiko secara formal dalam kebijakan manajemen risiko
2. Telah ada kerangka penilaian risiko, yang mencakup penilaian kemungkinan terjadinya risiko serta tingkat dampak (risk heatmap)
3. Telah dilaksanakan penilaian yang mempertimbangkan keefektifan proses/kontrol internal
4. Penilaian risiko diimplementasikan dan diterapkan dengan baik oleh Lini Pertama dan Kedua.
5. Proses telah mengklasifikasi setiap risiko yang terkuantifikasi dengan Perlakuan risiko (kurangi/transfer/hindari) dan memiliki kriteria peringatan dan nilai maksimal dari setiap risiko
6. Telah ada prosedur formal saat peringatan muncul/limit risiko terlampaui
7. Proses penilaian risiko telah dilaksanakan secara efektif, termasuk:
8. Penilaian dilaksanakan setidaknya setiap triwulan (misal penilaian awal dan penilaian terkini setiap triwulan)
1) Kerangka dan proses penilaian cukup efektif untuk menilai risiko, walaupun masih ada realisasi dampak kuantitatif dan kualitatif yang untuk beberapa jenis risiko yang melebihi dampak yang telah diperkirakan saat penilaian awal tahun
2) Kerangka dan proses penilaian telah dilakukan, namun masih ada beberapa realisasi peristiwa risiko signifikan yang belum dinilai pada saat penilaian awal tahun
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata
kelola risiko yang dapat berpengaruhpada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'D.2', 'D.2.36');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.36_5', '1. Telah ada kerangka dasar penilaian risiko secara formal dalam kebijakan manajemen risiko
2. Telah ada kerangka penilaian risiko, yang mencakup penilaian kemungkinan terjadinya risiko serta tingkat dampak (risk heatmap)
3. Telah dilaksanakan penilaian yang mempertimbangkan keefektifan proses/kontrol internal
4. Penilaian risiko diimplementasikan dan diterapkan dengan baik oleh Lini Pertama dan Kedua.
5. Proses telah mengklasifikasi setiap risiko yang terkuantifikasi dengan Perlakuan risiko (kurangi/transfer/hindari) dan memiliki kriteria peringatan dan nilai maksimal dari setiap risiko
6. Telah ada prosedur formal saat peringatan muncul/limit risiko terlampaui
7. Telah ada proses sistematis untuk mengidentifikasi dan menganalisis risiko- risiko yang akan muncul (emerging risk) di luar kerangka risiko yang telah ada seperti risiko operasional, finansial, dan kepatuhan serta risiko-risiko tersebut dipertimbangkan dalam proses pengambilan keputusan serta menjadi input dalam proses penilaian risiko yang dilakukan secara rutin
8. Proses penilaian risiko telah dilaksanakan secara efektif, termasuk:
1) Penilaian dilaksanakan setidaknya setiap triwulan atau lebih sering (misal penilaian awal dan penilaian terkini setiap triwulan, untuk risiko utama dilakukan pengkinian setiap bulan)
2) Kerangka dan proses penilaian efektif untuk menilai risiko, terbukti dari realisasi dampak kuantitatif dan kualitatif yang untuk sebagian besar jenis risiko tidakmelebihi dampak yang telah diperkirakan saat penilaian awal tahun
3) Kerangka dan proses penilaian telah komprehensif, sehingga hampir tidak ada realisasi peristiwa risiko signifikan yang belum dinilai pada saat penilaian awal tahun
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'D.2', 'D.2.36');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.37_1', '1. Risiko diidentifikasi di tingkat Unit Bisnis (secara terpisah/silo), Telah ada risk register informal dari masing- masing Unit Bisnis (belum ada prosedur standar/template)
2. Proses dilakukan secara ad-hoc
', 1, 'D.2', 'D.2.37');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.37_2', '1. Risiko diidentifikasi di tingkat Unit Bisnis (secara terpisah/silo), dan telah dilakukan analisis paparan risiko
2. Proses dilakukan secara ad-hoc
3. Telah ada beberapa risk register (dari setiap Unit Bisnis)
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'D.2', 'D.2.37');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.37_3', '1. Telah ada proses identifikasi risiko yang didefinisikan, biasanya melalui pendekatan bottom-up.
2. Proses identifikasi risiko menganalisis:
1) Karakteristik risiko inheren BUMN, dan;
2) Risiko-risiko dari kegiatan usaha BUMN
3. Telah ada gambaran umum paparan risiko, yang dicatat pada risk register.
4. Telah ada sistem risk register yang terkonsolidasi mencakup seluruh Unit Bisnis, namun perhitungan paparan risiko dalam risk register belum teragregasi
5. Proses ini biasanya dilakukan secara tahunan oleh Unit Bisnis.
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasionalBUMN yaitu 100-105% dari target RKAP
', 3, 'D.2', 'D.2.37');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.37_4', '1. Telah ada metodologi identifikasi risiko yang didefinisikan, melalui pendekatan bottom-up dan dilengkapi oleh pendekatan top-down (identifikasi risiko- risiko utama masih dilakukan di tingkat Unit Bisnis).
2. Proses identifikasi risiko menganalisis:
1) Karakteristik risiko inheren BUMN, dan;
2) Risiko-risiko dari kegiatan usaha BUMN
3. Telah ada gambaran umum paparan risiko, yang dicatat pada risk register.
4. Telah ada sistem risk register yang terkonsolidasi mencakup seluruh Unit Bisnis, dan perhitungan paparan risiko dalam risk register sudah teragregasi
5. Proses ini biasanya dilakukan setiap triwulan atau semester oleh Unit Bisnis dan unit risiko pusat
6. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'D.2', 'D.2.37');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.2.37_5', '1. Telah ada metodologi identifikasi risiko yang didefinisikan melalui pendekatan bottom-up di tingkat Unit Bisnis, dan pendekatan top-down yang dipimpin tim pusat
2. Identifikasi risiko dilakukan melalui pendekatan top-down berdasarkan input dari tingkat Unit Bisnis dan didefinisikan di tingkat pusat
3. Proses identifikasi risiko menganalisis:
1) Karakteristik risiko inheren BUMN, dan;
2) Risiko-risiko dari kegiatan usaha BUMN
4. Telah ada gambaran umum paparan risiko, yang dicatat pada risk register.
5. Telah ada sistem risk register yang terkonsolidasi mencakup seluruh Unit Bisnis, dan perhitungan paparan risiko dalam risk register sudah teragregasi
6. Proses ini biasanya dilakukan lebih rutin (misal setiap bulan atau secara berkesinambungan) oleh Unit Bisnis dan unit risiko pusat
7. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'D.2', 'D.2.37');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.38_1', '1. Telah ada kerangka rencana mitigasi risiko informal yang masih dalam cakupan high- level dan belum dijelaskan secara mendetail (sesuai dengan jenis-jenis risiko utama)', 1, 'D.3', 'D.3.38');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.38_2', '1. Telah ada sejumlah rencana formal mitigasi untuk beberapa risiko namun banyak risiko- risiko utama tidak memiliki penanggung jawab, rencana mitigasi maupun rencana respons
2. Belum ada pendekatan sistematis untuk menangani risiko-risiko utama
', 2, 'D.3', 'D.3.38');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.38_3', '1. Telah ada pemahaman yang seragam mengenai risiko- risiko utama di seluruh lini perusahaan.
2. Telah ada proses yang bersifat ad-hoc untuk menangani risiko-risiko utama tersebut
3. Belum ada garis tanggung jawab yang jelas dari Direktur Utama hingga ke front line
4. Telah ada proses/alur logis untuk mengelola beberapa risiko utama sesuai dengan definisi selera risiko, namun proses-proses tersebut belum sepenuhnya lengkap atau belum diperbarui
5. Rencana kontingensi masih belum lengkap (misal belum ada langkah tindak lanjut)
', 3, 'D.3', 'D.3.38');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.38_4', '1. Telah ada 5-10 risiko utama yang telah diidentifikasi dengan jelas dan disepakati oleh seluruh lini organisasi.
2. Telah ada kepemilikan dan tanggung jawab yang jelas untuk mengelola risiko- risiko utama (terdokumentasi)
3. Telah ada penanggung jawab yang jelas dan berkapabilitas yang ditunjuk untuk mengelola setiap risiko utama
4. Telah ada dokumentasi garis tanggung jawab dari Direktur Utama (CEO) hingga front line untuk setiap risiko utama
5. Telah ada proses/alur logis untuk mengelola setiap risiko utama sesuai dengan definisi selera risiko termasuk untuk emerging risk, misal:
1) Telah ada SOP asesmen risiko, prioritisasi, mitigasi, monitoring, sistem peringatan dini, dan metrik yang terperinci
2) Telah ada kebijakan risiko dan kepatuhan di tingkat grup dilengkapi kebijakan tingkat lokal/unit/anak perusahaan untuk mencakup seluruh risiko relevan
6. Telah ada kaji ulang dan perbaikan proses Manajemen Risiko, termasuk:
1) Telah ada feedback sistematis dari â€œnear-missesâ€ sampai dengan perbaikan proses
2) Usulan revisi dokumen kebijakan dikomunikasikan ke pemangku kepentingan relevan di seluruh Lini Pertahanan
3) Memastikan tidak adanya ambiguitas peran dan tanggung jawab yang tercantum dalam kebijakan risiko
4) Memastikan bahwa kebijakan risiko diturunkan menjadi Standar dan Prosedur
5) Jajaran manajemen senior terlibat secara aktif dalam melakukan reviu, mengkritisi, dan memperbaiki prosesmelalui pressure test setidaknya satu kali dalam setahun, misal terlibat dalam simulasi krisis/workshops, untuk identifikasi titik-titik lemah proses/root- cause analysis
7. Telah ada rencana kontingensi yang terdefinisi dengan baik untuk setiap risiko utama
8. Telah ada rencana tindakan mendetail dengan urutan langkah-langkah tindak lanjut yang spesifik.
9. Telah ada trigger points.
', 4, 'D.3', 'D.3.38');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.38_5', '1. Telah ada 5-10 risiko utama yang telah diidentifikasi dengan jelas dan disepakati oleh seluruh lini organisasi.
2. Telah ada kepemilikan dan tanggung jawab yang jelas untuk mengelola risiko-risiko utama (terdokumentasi)
3. Telah ada penanggung jawab yang jelas dan berkapabilitas yang ditunjuk untuk mengelola setiap risiko utama
4. Telah ada dokumentasi garis tanggung jawab dari Direktur Utama (CEO) hingga front line untuk setiap risiko utama
5. Telah ada proses/alur logis untuk mengelola setiap risiko utama sesuai dengan definisi selera risiko termasuk untuk emerging risk, misal:
1) Telah ada SOP asesmen risiko, prioritisasi, mitigasi, monitoring, sistem peringatan dini, dan metrik yang terperinci
2) Telah ada kebijakan risiko dan kepatuhan di tingkat grup dilengkapi kebijakan tingkat lokal/unit/anak perusahaan untuk mencakup seluruh risiko relevan
6. Telah ada kaji ulang dan perbaikan proses Manajemen Risiko, termasuk:
1) Telah ada feedback sistematis dari â€œnear- missesâ€ sampai dengan perbaikan proses
2) Usulan revisi dokumen kebijakan dikomunikasikan ke pemangku kepentingan relevan di seluruh Lini Pertahanan
3) Memastikan tidak adanya ambiguitas peran dan tanggung jawab yang tercantum dalam kebijakan risiko
4) Memastikan bahwa kebijakan risiko diturunkan menjadi Standar dan Prosedur
5) Jajaran manajemen senior terlibat secara aktif dalam melakukan reviu, mengkritisi, dan memperbaiki proses melalui
pressure test setidaknya satu kali dalamsetahun, misal terlibat dalam simulasi krisis/workshops, untuk identifikasi titik- titik lemah proses/root-cause analysis
7. Telah ada rencana kontingensi yang terdefinisi dengan baik untuk setiap risiko utama
8. Telah ada rencana tindakan mendetail dengan urutan langkah-langkah tindak lanjut yang spesifik.
9. Telah ada trigger points.
10. Setiap pegawai memahami dan menerima peran dan tanggung jawabnya yang berkaitan dengan kebijakan dan proses pengelolaan risiko-risiko utama, contohnya melalui:
1) Pelatihan khusus yang mencakup kebijakan yang berkaitan dengan risiko dan kontrol (misal modul pelatihan elektronik)
2) Forum reguler mengenai pembaruan terkini mengenai kebijakan risiko organisasi
3) Program penjangkauan untuk mendorong pegawai agar berani mengungkap setiap pelanggaran kebijakan
4) Matriks RACI (Responsible, Accountable, Consulted, Informed) yang ditetapkan untuk kebijakan yang dikeluarkan
11. Tidak ditemukan kekurangan serius dalam proses yang berkaitan dengan pengelolaan risiko-risiko utama
12. Telah ada definisi mengenai risiko-risiko yang akan direasuransikan dengan targetnya (dalam bentuk persentase risiko maupun nilai absolut yang tersisa di portofolio).', 5, 'D.3', 'D.3.38');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.39_1', '1. Telah ada pembahasan mengenai ketidakcocokan antara paparan risiko aktual dan selera risiko secara ad-hoc, danbelum ada jadwal pembahasan rutin
', 1, 'D.3', 'D.3.39');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.39_2', '1. Telah ada pembahasan mengenai ketidakcocokan antara paparan risiko aktual dan selera risiko sebagai bagian dari keputusan manajemen yang bersifat business as usual
2. Pembahasan dilakukan setidaknya satu kali dalam setahun
3. Belum ada keputusan mengenai langkah spesifik untuk menangani ketidakcocokan tersebut
4. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'D.3', 'D.3.39');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.39_3', '1. Telah ada proses terstruktur untuk menyusun strategi penanganan ketidakcocokan antara paparan risiko aktual dan selera risiko:
1)  Menyusun basis fakta/data mengenai risiko Melakukan analisis risiko
2) Memaparkan opsi-opsi kepada jajaran manajemen
2. Pembahasan dilakukan setidaknya setahun dua kali
3. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'D.3', 'D.3.39');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.39_4', '1. Telah ada proses terstruktur untuk menyusun strategi penanganan ketidakcocokan antara paparan risiko aktual dan selera risiko:
1) Menyusun basis fakta/data mengenai risiko
2) Melakukan analisis risikoo Memaparkan opsi-opsi kepada jajaran manajemen
2. Pembahasan dilakukan setidaknya setiap triwulan
3. Strategi yang ada saat ini telah efektif menjaga paparan risiko agar tetap di level yang diinginkan (misal tidak ditemui bukti mengenai risiko yang melampaui ambang batasnya).
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP
', 4, 'D.3', 'D.3.39');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.3.39_5', '1. Telah ada proses terstruktur untuk menyusun strategi penanganan ketidakcocokan antara paparan risiko aktual dan selera risiko:
1) Menyusun basis fakta/data mengenai risiko
2) Melakukan analisis risikoo Memaparkan opsi-opsi kepada jajaran manajemen
2. Pembahasan dilakukan setidaknya setiap bulan
3. Strategi yang ada saat ini telah efektif menjaga paparan risiko agar tetap di level yang diinginkan (misal tidak ditemui bukti mengenai risiko yang melampaui ambang batasnya)
4. Dilakukan penyelarasan antara perusahaan induk dan anak perusahaan/Unit Bisnis untuk memastikan bahwa analisis paparan risiko telah mencakup seluruh risiko dari anak perusahaan/Unit Bisnis
5. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'D.3', 'D.3.39');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.4.40_1', '1. Telah ada pelaporan risiko yang bersifat ad-hoc, dilatarbelakangi oleh peristiwa tertentu (misal insiden risiko, permintaan audit internal)
2. Pelaporan risiko belum mencakup gap dalam cakupan risiko-risiko utama, dan belum menerapkan Leading indicator
', 1, 'D.4', 'D.4.40');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.4.40_2', '1. Telah ada pelaporan risiko yang bersifat ad- hoc, dilatarbelakangi oleh peristiwa tertentu (misal insiden risiko, permintaan audit internal)
2. Pelaporan mencakup gap dalam cakupan risiko-risiko utama, berfokus pada proses
3. Penerapan Leading indicator masih terbatas.', 2, 'D.4', 'D.4.40');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.4.40_3', '1. Pelaporan dilakukan untuk memenuhi persyaratan pelaporan finansial atau pelaporan yang bersifat legal/kepatuhan
2. Pelaporan dilakukan secara rutin (misal laporan triwulanan menunjukkan dengan jelas ambang batas risiko yang telah terlampaui)
3. Pelaporan menyertakan sejumlah Leading indicator
4. Cakupan pelaporan masih dalam tingkat Unit Bisnis tertentu
', 3, 'D.4', 'D.4.40');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.4.40_4', '1. Pelaporan dilakukan untuk memenuhi persyaratan pelaporan finansial atau pelaporan yang bersifat legal/kepatuhan
2. Pelaporan dilakukan secara rutin (misal laporan triwulanan menunjukkan dengan jelas ambang batas risiko yang telah terlampaui) dan dilengkapi dengan rekomendasi tindak lanjut perbaikan, dan analisis tambahan
3. Telah ada pelaporan di tingkat Unit Bisnis dan tingkat grup, termasuk anak perusahaan (jika relevan)
4. Pelaporan risiko mencakup ringkasan semua risiko utama di semua jenis risiko, kejadian-kejadian penting dengan analisis post-mortem, Leading indicator, dan rekomendasi yang dapat ditindaklanjuti
', 4, 'D.4', 'D.4.40');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('D.4.40_5', '1. Pelaporan dilakukan untuk memenuhi persyaratan pelaporan finansial atau pelaporan yang bersifat legal/kepatuhan
2. Pelaporan dilakukan secara rutin (misal laporan triwulanan menunjukkan dengan jelas ambang batas risiko yang telah terlampaui) dan dilengkapi dengan rekomendasi tindak lanjut perbaikan, dan analisis tambahan
3. Telah ada pelaporan di tingkat Unit Bisnis dan tingkat grup, termasuk anak perusahaan (jika relevan)
4. Pelaporan risiko mencakup ringkasan semua risiko utama di semua jenis risiko, kejadian-kejadian penting dengan analisis post-mortem, Leading indicator, dan rekomendasi yang dapat ditindaklanjuti
5. Pelaporan dilakukan menggunakan toolkit otomatis dan hasil pelaporan dapat diakses secara real-time
', 5, 'D.4', 'D.4.40');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.1.41_1', '1. Belum ada penerapan model risiko, namun telah ada analisis yang dilakukan secara ad- hoc (misal melalui analisis metrik keuangan, analisis kualitatif) meskipun belum dilakukan standardisasi dan formalisasi cakupan dan metodologi analisis
2. Proses Manajemen Risiko belum menerapkan Advanced Analytics (misal analisis masih dilakukan secara manual)
', 1, 'E.1', 'E.1.41');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.1.41_2', '1. Model risiko diterapkan untuk kuantifikasi risiko namun belum secara rutin (masih secara ad- hoc) dan tidak terintegrasi dalam pengambilan keputusan
2. Aplikasi Advanced Analytics untuk Manajemen Risiko masih dalam pengembangan
3. BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP
', 2, 'E.1', 'E.1.41');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.1.41_3', '1. Telah ada model risiko untuk kuantifikasi risiko; namun, model hanya tersedia untuk sebagian jenis risiko/diterapkan pada tingkat tinggi (misal analisis skenario P/L) tanpa analisis granular
2. Telah ada aplikasi Advanced Analytics untuk Manajemen Risiko, namun masih dalam tahap awal, misal terdapat Early Warning System (EWS) yang baru dikembangkan.
3. Model risiko mungkin belum divalidasi/tidak pernah divalidasi untuk menguji keefektifannya
4. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP
', 3, 'E.1', 'E.1.41');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.1.41_4', '1. Telah ada model risiko untuk kuantifikasi risiko untuk sebagian besar risiko teratas perusahaan, dengan analisis dampak berbasis risiko secara mendetail yang dikonsolidasikan ke dampak tingkat agregasian (misal P/L, arus kas)
2. Telah ada aplikasi Advanced Analytics untuk Manajemen Risiko namun dengan tingkat kematangan berbeda (misal Early Warning System/EWS telah matang, namun anti-fraud analytics baru dikembangkan).
3. Telah ada aplikasi Early Warning System (EWS) yang telah matang, yang secara otomatis memperbarui dan mengambil data.
4. Telah ada tim risk model and analytics in- house khusus yang memiliki kapabilitas Manajemen Risiko dan kemampuan manajemen model khusus di beberapa, namun tidak semua tahapan siklus hidup manajemen model
1) Pembuatan model
2) Pengembangan model
3) Implementasi model
4) Pemantauan dan validasi model
5. Model risiko secara rutin divalidasi, namun keakuratannya bervariasi (misal banyak model masih memiliki GINI rendah kurang dari 30%)
6. Teknik pemodelan risiko mungkin tidak diterapkan secara konsisten di seluruh Unit Bisnis/anak perusahaan (misal SOP, bakat pemodelan, tata kelola, mandat, dan kapabilitas lain yang belum dibagikan/diturunkan)
7. Manajemen model dilakukan secara manual dan tersebar di beberapa pemilik tanpa dokumentasi yang baik dan sistem penyimpanan terpusat
8. BUMN dengan skor maturitas pada parameter ini telah menerapkan tatakelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 105-110% dari target RKAP', 4, 'E.1', 'E.1.41');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.1.41_5', '1. Telah ada model risiko untuk kuantifikasi risiko untuk sebagian besar risiko teratas perusahaan, dengan analisis dampak berbasis risiko secara mendetail yang dikonsolidasikan ke dampak tingkat agregasian (misal P/L, arus kas)
2. Data risiko digunakan dan menjadi input otomatis untuk setiap analisis dan model.
3. Telah ada lebih dari satu implementasi aplikasi Advanced Analytics manajemen risiko yang telah matang (misal Early Warning System/EWS, anti-fraud, penagihan).
4. Telah ada aplikasi Early Warning System (EWS) yang telah matang, yang secara otomatis memperbarui dan mengambil data.
5. Telah ada tim risk model and analytics in- house khusus yang memiliki kapabilitas Manajemen Risiko dan kemampuan manajemen model khusus di semua tahapan siklus hidup manajemen model
1) Pembuatan model
2) Pengembangan model
3) Implementasi model
4) Pemantauan dan validasi model
6. Model risiko secara rutin divalidasi oleh pihak validator independen dan model terus diperbaiki untuk mencapai tingkat akurasi yang lebih tinggi (misal GINI > 50%).
7. Penerapan teknologi dan algoritma AI/ML dalam model risiko, termasuk prosedur untuk mengurangi potensi penyalahgunaan/ketidakpastian/bias dari penggunaan teknik-teknik canggih tersebut
8. Teknik pemodelan risiko yang diterapkan secara konsisten di seluruh Unit Bisnis/anak perusahaan (misal SOP, bakat pemodelan, tata kelola, mandat, dan kapabilitas lainnya yang dibagikan/diturunkan)Digitalisasi dan otomatisasi terhadap manajemen model di seluruh siklus hidup model secara menyeluruh, dengan pengembangan model, dokumentasi, validasi, dan pelaporan yang dikonsolidasikan dalam sistem/ruang kerja yang terpusat
9. BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada terCapaianya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP
', 5, 'E.1', 'E.1.41');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.2.42_1', '1. Telah ada sistem data terpusat (misal untuk data keuangan) memuat data yang bisa digunakan untuk keperluan manajemen risiko (misal, modul ad- hoc khusus untuk analisis manajemen risiko ada dalam cakupan sistem lain)
â€¢ Namun, perusahaan belum memiliki database risiko terpusat (informasi hanya tersedia di tingkat Unit Bisnis/proyek)
', 1, 'E.2', 'E.2.42');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.2.42_2', '1. Telah ada sistem dan infrastruktur data terpusat khusus untuk manajemen risiko dalam tahap awal implementasi/pilot stage
2. Data risiko belum dikumpulkan dan diperbarui secara rutin
3. Database terpusat hanya mengambil data dari perusahaan induk, dan belum menarik data dari anak perusahaan (untuk perusahaan konglomerasi)
4. Database risiko terpusat belum digunakan di seluruh proses risiko secara menyeluruh (misal terdapat dashboard untuk dilakukan pemantauan, namun belum ada input terpusat untuk menginventarisasi risiko)
', 2, 'E.2', 'E.2.42');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.2.42_3', '1. Telah ada penyimpanan data risiko terpusat khusus untuk manajemen risiko yang rutin diperbarui (paling sedikit setiap tahun) yang dapat digunakan oleh pengguna yang tepat, mencakup data risiko dari perusahaan induk dan anak perusahaan dengan metrik-metrik terstandar
2. Telah ada sistem penyimpanan data risiko terpusat:
1) Telah ada solusi IT (misal alat terkait tata kelola, manajemen risiko, dan kepatuhan yang digunakan untuk menunjang fungsi risiko dan kontrol mulai dari penilaian risiko hingga pelaporannya (dashboard).
2) Namun, mungkin ada duplikasi/ fragmentasi aset TI yang mengarah pada implementasi yang kompleks dari arsitektur data risiko end-to- end/masalah kualitas data dan kompleksitasSolusi IT memuat informasi mengenai paparan risiko, kebijakan dan prosedur manajemen risiko, dan limit risiko.
3. Cakupan data risiko yang dikelola terbatas, yaitu terutama untuk jenis risiko utama organisasi (misal risiko pasar, risiko operasional)', 3, 'E.2', 'E.2.42');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.2.42_4', '1. Telah ada penyimpanan data risiko terpusat khusus untuk manajemen risiko yang rutin diperbarui (paling sedikit setiap triwulan) yang dapat digunakan oleh pengguna yang tepat, mencakup data risiko dari perusahaan induk dan anak perusahaan dengan metrik-metrik terstandar
2. Telah ada sistem penyimpanan data risiko yang terpusat dan terintegrasi:
1) Telah ada solusi IT terintegrasi (misal alat terkait tata kelola, manajemen risiko, dan kepatuhan yang digunakan untuk menunjang fungsi risiko dan kontrol mulai dari penilaian risiko hingga pelaporannya (dashboard).
2) Minim duplikasi/fragmentasi aset TI sehingga memungkinkan penerapan arsitektur data risiko secara menyeluruh
3. Solusi IT memuat informasi mengenai paparan risiko, kebijakan dan prosedur Manajemen Risiko, dan limit risiko.
4. Pengelolaan data risiko dengan cakupan lebih luas untuk jenis-jenis risiko material bagi perusahaan, termasuk data untuk risiko-risiko yang lebih "kualitatif" (misal risiko reputasi)Telah ada penyimpanan data sentral yang dapat mencatat data kerugian internal, termasuk near-misses.
5. Diterapkan otomatisasi pengumpulan data operasional untuk pelaporan risiko', 4, 'E.2', 'E.2.42');
INSERT INTO `tbl_question` (`question_id`, `question`, `phase_id`, `subdimensi_id`, `parameter_id`) VALUES ('E.2.42_5', '1. Telah ada penyimpanan data risiko terpusat khusus untuk manajemen risiko yang rutin diperbarui (paling sedikit setiap triwulan) yang dapat digunakan oleh pengguna yang tepat, mencakup data risiko dari perusahaan induk dan anak perusahaan dengan metrik-metrik terstandar
2. Telah ada sistem penyimpanan data risiko yang terpusat dan terintegrasi:
1) Telah ada solusi IT terintegrasi (misal alat terkait tata kelola, manajemen risiko, dan kepatuhan yang digunakan untuk menunjang fungsi risiko dan kontrol mulai dari penilaian risiko hingga pelaporannya (dashboard).
2) Minim duplikasi/fragmentasi aset TI sehingga memungkinkan penerapan arsitektur data risiko secara menyeluruh
3. Solusi IT memuat informasi mengenai paparan risiko, kebijakan dan prosedur Manajemen Risiko, dan limit risiko.
4. Data risiko yang dikelola mencakup semua jenis risiko material perusahaan, termasuk data untuk risiko yang lebih "kualitatif" dan jenis risiko yang muncul (misal data risiko privasi)
5. Telah ada penyimpanan data sentral yang dapat mencatat data kerugian internal, termasuk near-misses.Diterapkan otomatisasi pengumpulan data operasional untuk pelaporan risiko.
6. Kualitas data risiko sangat baik dan konsisten di seluruh lini perusahaan, ditunjang dengan:
1) Pelaporan berkala mengenai kontrol kualitas data secara menyeluruh dan pelaporan mengenai kekurangan kualitas data
2) Jalur eskalasi yang jelas untuk menyelesaikan masalah terkait data
7. Telah ada pengelolaan kualitas data secara otomatis dan pemanfaatan teknologi (misal teknik berbasis AI/ML untuk mempercepat identifikasi dan remediasi masalah kualitas data)
', 5, 'E.2', 'E.2.42');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('A.1', 'Budaya Risiko', 'A');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('A.2', 'Kapabilitas Risiko', 'A');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('B.1', 'Organ Pengelola Risiko', 'B');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('B.2', 'Peran dan Tanggung Jawab Organ Pengelola Risiko', 'B');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('B.3', 'Model Tata Kelola Risiko Tiga Lini dan Tata Kelola Risiko Terintegrasi', 'B');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('C.1', 'Strategi Risiko', 'C');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('C.2', 'Kebijakan dan Prosedur', 'C');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('C.3', 'Fungsi Kepatuhan', 'C');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('C.4', 'Efektifitas Management Risiko', 'C');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('C.5', 'Efektifitas Pengendalian Internal', 'C');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('D.1', 'Proses dan Kontrol Risiko', 'D');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('D.2', 'Pengukuran dan Prioritas Risiko', 'D');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('D.3', 'Perlakuan Risiko', 'D');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('D.4', 'Pelaporan Risiko', 'D');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('E.1', 'Permodelan Risiko', 'E');
INSERT INTO `tbl_sub_dimensi` (`subdimensi_id`, `subdimensi_name`, `dimensi_id`) VALUES ('E.2', 'Data Risiko', 'E');
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (1, 'pak imam', 'super.admin@gmail.com', '8ae7fdbf5ede1e8bb6319692f923ed3b82a2dc7eb5e9a79a18110892752e0273dfb8fc6f31400785801b742ac72010b2880ac057843ff0105f8569b9c77379a2Ir5AOsGHPOA7P/tZRyZJLN+E0xZMgbCI/sArKw2xVQU=', 1, 1);
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (2, 'pak wid', 'approval@gmail.com', 'ffefd8c31693812b6b358fa721bbd6a2fff152b2c077cc82e79500cce81deb1c0b7e756f164006ed927d321209790939604b72d6c1049eb7ff51252aadd39f08jg3d+xV53U1vBDnqPzKLY8Xz4GW36CXz6NUM8BhkF7U=', 2, 1);
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (3, 'mba inti', 'admin@gmail.com', '2ace0a41e24c010060caeafe23fba399c0e1e7ca6a5b04ddca5791af99499a0d008669be5438fe715197aad37bb3fddfde05c2c82c1a1fe68382d3ab05c26819LYaU5PohB7ClM5Lv0ul0FLMGYYATCdY5avu6NW93orQ=', 3, 1);
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (6, 'Shani Indira', 'sempurna@gmail.com', 'fad075abe6234575363af5558e7db58144880050d2bd0b81a4c276cc3ab994e3ce0cd278c59f67383df6812ecaa5490e490fc40defec7093df0922d8931ab8e4pXgy5l1c04XOQyrehxtDQOojU+XNvPT+Ezjr3bKUH+Q=', 2, 1);
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (7, 'Nunung Jayawardana', 'frey@gmail.com', 'bd95032db18f36fbab91cb4b160c0c4a14aec981e5fa2d4279d769584045190e6122f8e70bc9b8c8bf124cfc377d0b868fc2ebbdfb50b02b86dbfb684499a759UMxvb+dM8oBUaIaqa2+dhPIWkWgmQEoy5C3BfMqH4Cc=', 3, 1);
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES (9, 'Nurul', 'nurul@gmail.com', 'a19e44a7fe65a0547922667abd2a00c8092ea5ad450d88045c66c67ff396eb50376e48d6bbcc537b53a0bf85e66023a846365bbb33543c7fbef62b80c44d7511+aXCqXRsMZkRpMU3dsYfU4sOQZkL7/o8JQ0w2sJjM5Q=', 1, 1);
SET FOREIGN_KEY_CHECKS = 1;
ALTER TABLE `tbl_dimensi` ADD CONSTRAINT `tbl_dimensi_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_kategori` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_file_assessment` ADD CONSTRAINT `fk_files_assessment` FOREIGN KEY (`assessment_id`) REFERENCES `tbl_assessment` (`assessment_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_parameter` ADD CONSTRAINT `tbl_parameter_ibfk_1` FOREIGN KEY (`subdimensi_id`) REFERENCES `tbl_sub_dimensi` (`subdimensi_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_question` ADD CONSTRAINT `tbl_question_ibfk_1` FOREIGN KEY (`subdimensi_id`) REFERENCES `tbl_sub_dimensi` (`subdimensi_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_question` ADD CONSTRAINT `tbl_question_ibfk_2` FOREIGN KEY (`phase_id`) REFERENCES `tbl_phase` (`phase_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_question` ADD CONSTRAINT `tbl_question_ibfk_3` FOREIGN KEY (`parameter_id`) REFERENCES `tbl_parameter` (`parameter_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbl_sub_dimensi` ADD CONSTRAINT `tbl_sub_dimensi_ibfk_1` FOREIGN KEY (`dimensi_id`) REFERENCES `tbl_dimensi` (`dimensi_id`) ON DELETE CASCADE ON UPDATE CASCADE;
