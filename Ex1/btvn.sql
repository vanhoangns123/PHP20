/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : btvn

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 25/08/2019 18:29:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(255) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int(10) NULL DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` mediumblob NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Thời sự', NULL, '/thoisu.png', 'thoi-su', 0x43687579C3AA6E206DE1BBA563207468E1BB9D692073E1BBB1, '2019-08-09 14:53:31');
INSERT INTO `categories` VALUES (2, '', 1, 'Screenshot (4).png', 'galaxy-note10-co-gi-hay-ho-hon-galaxy-s10', 0x53616D73756E672047616C617879204E6F746531302076732047616C617879205331302B2063C3B32073E1BBB1206B68C3A163206269E1BB87742072C3B52072C3A06E672063E1BAA32076E1BB81206E676FE1BAA1692068C3AC6E682063C5A96E67206E68C6B02063C3A1632074C3AD6E68206EC4836E67206DE1BB9B692E, '2019-08-09 14:55:00');
INSERT INTO `categories` VALUES (3, 'Tin nước ngoài', 1, '/tinnuocngoai.png', 'tin-nuoc-ngoai', 0x43687579E1BB876E206DE1BBA563207468E1BB9D692073E1BBB1202D2054696E206EC6B0E1BB9B63206E676FC3A069, '2019-08-09 14:55:31');
INSERT INTO `categories` VALUES (4, 'Văn hóa - Xã hội', NULL, '/vanhoa.png', 'van-hoa-xa-hoi', 0x43687579C3AA6E206DE1BBA5632076C4836E2068C3B361202D2078C3A32068E1BB9969, '2019-08-09 14:56:12');
INSERT INTO `categories` VALUES (5, 'Công nghệ', NULL, '/congnghe.png', 'cong-nghe', 0x43687579C3AA6E206DE1BBA5632063C3B46E67206E6768E1BB87, '2019-08-09 14:58:11');
INSERT INTO `categories` VALUES (7, 'Tin tức công nghệ ', 5, '/tintuccongnghe.png', 'tin-tuc-cong-nghe', 0x436879C3AA6E206DE1BBA5632063C3B46E67206E6768E1BB87202D2074696E2074E1BBA9632063C3B46E67206E6768E1BB87, '2019-08-09 15:00:01');
INSERT INTO `categories` VALUES (NULL, 'đ', 1, '68575904_2435896673292819_4137724252621111296_o.jpg', 'd', 0x6464, NULL);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `view_count` bigint(20) NULL DEFAULT NULL,
  `user_id` int(10) NULL DEFAULT NULL,
  `category_id` int(10) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (2, 'Galaxy Note10', 'Samsung Galaxy Note10 vs Galaxy S10+ có sự khác biệt rõ ràng cả về ngoại hình cũng như các tính năng mới.', 'Screenshot (6).png', 'Galaxy Note10 mới cuối cùng đã xuất hiện chính thức. Theo truyền thống, mỗi năm khi một thiết bị Galaxy Note mới xuất hiện, chúng chắc chắn được so sánh với các flagship mới nhất của Samsung từ dòng Galaxy S. Và năm nay, Galaxy S10+ là phiên bản mà gần nhất với Galaxy Note10 về thông số kỹ thuật và tính năng.\n\nMàn hình 1080p trên Galaxy Note10\n\nMàn hình của Galaxy Note10 chỉ nhỏ hơn 1 inch so với màn hình trên Galaxy S10 +, đáng chú ý hơn là độ phân giải trên Galaxy Note10 chỉ là 1080x2280 pixel so với 1440x3040 của Galaxy S10 +.', 'galaxy-note10-co-gi-hay-ho-hon-galaxy-s10', 1, 2, 7, '2019-08-09 15:06:13');
INSERT INTO `posts` VALUES (11, 'â', 'aa', 'Screenshot (2).png', 'fff', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `posts` VALUES (22, '22', '22', 'Screenshot (6).png', '3', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `posts` VALUES (33, '333', '333', 'Screenshot (3).png', '444', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trần Minh Đức', 'ductm.kma@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/avata.png', '2019-08-09 14:47:54');
INSERT INTO `users` VALUES (2, 'Vũ Văn Thương', 'thuongvv.hust@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/avata.png', '2019-08-09 14:50:10');
INSERT INTO `users` VALUES (3, 'Nguyễn Văn Hiệp', 'hiepbk@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/image.png', '2019-08-09 14:50:42');
INSERT INTO `users` VALUES (4, 'Hoàng Trung Hiếu', 'hieuht@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/image.png', '2019-08-09 14:51:11');
INSERT INTO `users` VALUES (5, 'Nguyễn Hải Anh', 'haianh.bka@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/haianh.png', '2019-08-09 14:51:45');
INSERT INTO `users` VALUES (6, 'Trần Danh Tùng', 'tungtd.kma@gmail.com', 'jiGZHWqaF5emuVNfPYPBf8nfyW', '/anh.png', '2019-08-08 12:12:12');

SET FOREIGN_KEY_CHECKS = 1;
