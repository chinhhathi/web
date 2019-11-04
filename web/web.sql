-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2019 lúc 08:06 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ability_dictionary`
--

CREATE TABLE `ability_dictionary` (
  `id` int(11) NOT NULL,
  `ability_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `aibility_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ability_note` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ability_dictionary`
--

INSERT INTO `ability_dictionary` (`id`, `ability_name`, `aibility_type`, `ability_note`) VALUES
(1, 'PHP', 'Ngôn ngữ lập trình', '1-10'),
(2, 'JAVA', 'Ngôn ngữ lập trình', '1-10'),
(3, 'HTML', 'Ngôn ngữ lập trình', '1-10'),
(4, 'CSS', 'Ngôn ngữ lập trình', '1-10'),
(5, 'JavaScript', 'Ngôn ngữ lập trình', '1-10'),
(6, 'MySQL', 'Hệ quản trị Cơ sở dữ liệu', '1-10'),
(7, 'Cấu trúc dữ liệu', 'Môn học ngành CNTT', '1-10'),
(8, 'Trí tuệ nhân tạo', 'Môn học ngành CNTT', '1-10'),
(9, 'TOEFL', 'Chứng chỉ ngoại ngữ', '1-900'),
(10, 'TOEIC', 'Chứng chỉ ngoại ngữ', '1-900'),
(11, 'IELTS', 'Chứng chỉ ngoại ngữ', '0.0-9.0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `employee_count` int(11) NOT NULL,
  `gross_revenue` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_page` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tax_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `organization`
--

INSERT INTO `organization` (`id`, `organization_name`, `employee_count`, `gross_revenue`, `address`, `home_page`, `tax_number`) VALUES
(1, 'Ngân hàng TMCP đầu tư và phát triển Việt Nam BIDV', 2000, 500000000, 'Nguyễn Trãi, Thanh Xuân, Hà Nội', 'https://bidv.com.vn', '1234567');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization_requests`
--

CREATE TABLE `organization_requests` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `organization_requests`
--

INSERT INTO `organization_requests` (`id`, `organization_id`, `subject`, `short_description`, `amount`, `date_submitted`, `status`) VALUES
(1, 1, 'Ngân hàng TMCP đầu tư và phát triển Việt Nam BIDV', 'Tuyển dụng thực tập sinh có trình độ cơ bản về PHP, HTML, CSS, JS, AJAX, MySQL...', 5, '2019-11-04', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization_request_abilities`
--

CREATE TABLE `organization_request_abilities` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `organization_request_abilities`
--

INSERT INTO `organization_request_abilities` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(1, 1, 1, 'Trình độ cơ bản', '5/10'),
(2, 1, 6, 'Trình độ cơ bản', '5/10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization_request_assignment`
--

CREATE TABLE `organization_request_assignment` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(2) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `professor_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `professor`
--

INSERT INTO `professor` (`id`, `professor_code`, `full_name`, `sex`) VALUES
(1, '1234567', 'Đỗ Trung Tuấn', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sur_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `join_date` date NOT NULL,
  `class_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `student_code`, `first_name`, `sur_name`, `last_name`, `date_of_birth`, `join_date`, `class_name`) VALUES
(1, '16001752', 'Hà', 'Thị', 'Chinh', '1998-06-17', '2016-09-05', 'Máy tính và Khoa học Thông tin'),
(2, '16001878', 'Trần Thị', 'Thu', 'Trang', '1998-01-01', '2016-09-05', 'Máy tính và Khoa học Thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_ability`
--

CREATE TABLE `student_ability` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student_ability`
--

INSERT INTO `student_ability` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(1, 1, 6, '5'),
(2, 1, 1, '7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_register`
--

CREATE TABLE `student_register` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `submit_date` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student_register`
--

INSERT INTO `student_register` (`id`, `student_id`, `request_id`, `submit_date`, `status`) VALUES
(1, 1, 1, '2019-11-04', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ability_dictionary`
--
ALTER TABLE `ability_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `organization_requests`
--
ALTER TABLE `organization_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Chỉ mục cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ability_id` (`ability_id`),
  ADD KEY `organization_request_id` (`organization_request_id`);

--
-- Chỉ mục cho bảng `organization_request_assignment`
--
ALTER TABLE `organization_request_assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_request_id` (`organization_request_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Chỉ mục cho bảng `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student_ability`
--
ALTER TABLE `student_ability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Chỉ mục cho bảng `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `request_id` (`request_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ability_dictionary`
--
ALTER TABLE `ability_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `organization_requests`
--
ALTER TABLE `organization_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `organization_request_assignment`
--
ALTER TABLE `organization_request_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `student_ability`
--
ALTER TABLE `student_ability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `student_register`
--
ALTER TABLE `student_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `organization_requests`
--
ALTER TABLE `organization_requests`
  ADD CONSTRAINT `organization_requests_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Các ràng buộc cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD CONSTRAINT `organization_request_abilities_ibfk_1` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `organization_request_abilities_ibfk_2` FOREIGN KEY (`ability_id`) REFERENCES `ability_dictionary` (`id`),
  ADD CONSTRAINT `organization_request_abilities_ibfk_3` FOREIGN KEY (`organization_request_id`) REFERENCES `organization` (`id`),
  ADD CONSTRAINT `organization_request_abilities_ibfk_4` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`);

--
-- Các ràng buộc cho bảng `organization_request_assignment`
--
ALTER TABLE `organization_request_assignment`
  ADD CONSTRAINT `organization_request_assignment_ibfk_1` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `organization_request_assignment_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Các ràng buộc cho bảng `student_ability`
--
ALTER TABLE `student_ability`
  ADD CONSTRAINT `student_ability_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_ability_ibfk_2` FOREIGN KEY (`ability_id`) REFERENCES `ability_dictionary` (`id`);

--
-- Các ràng buộc cho bảng `student_register`
--
ALTER TABLE `student_register`
  ADD CONSTRAINT `student_register_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_register_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `organization_requests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
