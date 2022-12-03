-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2022 at 10:40 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `louis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `brn_id` int(10) NOT NULL,
  `brn_key` int(10) NOT NULL,
  `brn_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`brn_id`, `brn_key`, `brn_name`) VALUES
(1, 1001, 'สำนักงานใหญ่ (Sathon)'),
(2, 1002, 'สมุทรปราการ (WH)'),
(3, 1003, 'ชลบุรี (Factory)');

-- --------------------------------------------------------

--
-- Table structure for table `category_it`
--

CREATE TABLE `category_it` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_it`
--

INSERT INTO `category_it` (`cate_id`, `cate_name`) VALUES
(2, 'Computer PC'),
(3, 'Computer Notebook'),
(4, 'Computer Server'),
(5, 'Printer (Dot Matrix)'),
(6, 'Printer (Inkjet)'),
(7, 'Printer (Laser)');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_description`) VALUES
(1, 'ผู้บริหาร', 'CEO'),
(2, 'ฝ่ายไอที', 'IT'),
(3, 'ฝ่ายบัญชี', 'Accounting'),
(4, 'ฝ่ายการเงิน', 'Finance'),
(5, 'ฝ่ายจัดซื้อ', 'Purchasing '),
(6, 'ฝ่ายการตลาด', 'Marketing '),
(7, 'ฝ่ายประสานการขาย', 'Sales Coordination'),
(8, 'ฝ่ายต่างประเทศส่งออก', 'Export'),
(9, 'ฝ่ายบุคคล', 'HR'),
(10, 'ฝ่ายขาย', 'Sale'),
(11, 'โอเปอร์เรเตอร์', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `department_repair`
--

CREATE TABLE `department_repair` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_repair`
--

INSERT INTO `department_repair` (`dept_id`, `dept_name`) VALUES
(1, 'ไอที'),
(2, 'บัญชี'),
(3, 'การตลาด'),
(4, 'การเงิน'),
(5, 'จัดซื้อ'),
(6, 'ส่งออก'),
(7, 'ประสานงานขาย');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eqm_id` int(10) NOT NULL,
  `eqm_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_cate` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_branch` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_iddevice` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_memory` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_device` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_model` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_hdd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_serial` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_monitor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eqm_device_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eqm_id`, `eqm_name`, `eqm_date`, `eqm_cate`, `eqm_branch`, `eqm_note`, `eqm_iddevice`, `eqm_memory`, `eqm_device`, `eqm_model`, `eqm_hdd`, `eqm_serial`, `eqm_monitor`, `eqm_price`, `eqm_device_ip`) VALUES
(1, 'Dell oftiplex', '2022-10-10', '2', '1', 'Server', 'IT45678SATHON', '32 GB', '', 'Fratsy152626373', '20 TB', 'Gstsgwhaksh', '30\"', '13,000', ''),
(2, 'Asus', '2022-10-11', '2', '2', 'Tyyuu', 'Eerrdt134', '8 gb', 'Asus', 'Thai', 'Ssd', 'Gutfd', 'Seer', 'Yytrr', '192.168.0.178');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_repair`
--

CREATE TABLE `inventory_repair` (
  `invt_id` int(10) NOT NULL,
  `invt_date` varchar(255) NOT NULL,
  `invt_branch` int(10) NOT NULL,
  `invt_dept` int(10) NOT NULL,
  `invt_user` int(10) NOT NULL,
  `invt_equipment` int(10) NOT NULL,
  `invt_problem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invt_status` int(10) NOT NULL,
  `invt_process` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invt_solution` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invt_solution_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invt_evenUser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invt_success` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_repair`
--

INSERT INTO `inventory_repair` (`invt_id`, `invt_date`, `invt_branch`, `invt_dept`, `invt_user`, `invt_equipment`, `invt_problem`, `invt_status`, `invt_process`, `invt_solution`, `invt_solution_detail`, `invt_evenUser`, `invt_success`) VALUES
(17, '2022-10-17 16:45:24', 1, 2, 2, 7, 'ปริ้นไม่ออก', 4, 'ศศิวิมล จากงูเหลือม', 'ทำงานปกติแล้ว', 'ทำงานปกติแล้ว', 'ศศิวิมล จากงูเหลือม', '2022-10-17 16:56:16'),
(18, '2022-10-17 16:56:59', 1, 4, 4, 5, 'หฟหกฟหก', 4, 'Aekkachai', 'ทำงานได้ปกติแล้ว', 'ไม่มีรายละเอียด', 'ศศิวิมล จากงูเหลือม', '2022-10-18 10:51:22'),
(19, '2022-10-22 13:55:14', 1, 1, 4, 2, 'คอมเปิดไม่ติด', 3, 'Aekkachai', 'ลาออก', 'ลาออก', 'Aekkachai', '2022-10-22 13:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `it_problem`
--

CREATE TABLE `it_problem` (
  `itp_id` int(10) NOT NULL,
  `itp_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itp_dept` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itp_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itp_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itp_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itp_anydesk` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `it_problem`
--

INSERT INTO `it_problem` (`itp_id`, `itp_date`, `itp_dept`, `itp_name`, `itp_detail`, `itp_ip`, `itp_anydesk`) VALUES
(39, '2022-10-22 08:57:33', 'ฝ่ายบัญชี', 'หกหห', 'หกหกห', '192.168.0.214', '98904615assss\r'),
(40, '2022-10-22 08:58:58', 'ผู้บริหาร', 'ยย', 'ฟไดไ', '192.168.0.214', '98904615assss\r'),
(41, '2022-10-22 09:03:45', 'ผู้บริหาร', 'ss', 'sss', '192.168.0.214', '98904615assss\r'),
(42, '2022-10-24 09:25:03', 'ผู้บริหาร', 'scs', 'scsc', '::1', ''),
(43, '2022-10-24 09:25:39', 'ฝ่ายไอที', 'เทส', 'เทส', '192.168.0.214', ''),
(44, '2022-10-24 09:26:42', 'ฝ่ายการตลาด', 'จอคอม', 'จอคอม', '192.168.0.214', ''),
(45, '2022-10-24 10:28:51', 'ฝ่ายต่างประเทศส่งออก', 'dfsdf', 'sdfsdf', '192.168.0.214', ''),
(46, '2022-10-24 11:06:21', 'ฝ่ายจัดซื้อ', 'test', 'test', '192.168.0.214', ''),
(47, '2022-10-24 13:15:44', 'ผู้บริหาร', 'กกหกหก', 'testss', '192.168.0.214', ''),
(48, '2022-10-24 16:07:02', 'ฝ่ายบุคคล', 'aekkachai Namwicha', 'Louis Adhesive', '192.168.0.214', ''),
(49, '2022-10-24 16:27:59', 'ฝ่ายประสานการขาย', 'ตี่', 'คอมมีปัญหา', '192.168.0.214', ''),
(50, '2022-10-24 16:35:21', 'ฝ่ายประสานการขาย', 'Trrrr', 'Tfscd', '192.168.0.180', ''),
(51, '2022-10-24 17:39:24', 'ฝ่ายขาย', 'Test', 'เทสนะเนี่ย อิอิอิ', '192.168.0.214', ''),
(52, '2022-10-25 09:06:15', 'ผู้บริหาร', 'asd', 'as', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(10) NOT NULL,
  `level_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'CEO'),
(2, 'Administrator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `public_relations`
--

CREATE TABLE `public_relations` (
  `pr_id` int(11) NOT NULL,
  `pr_topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pr_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pr_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pr_picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `public_relations`
--

INSERT INTO `public_relations` (`pr_id`, `pr_topic`, `pr_detail`, `pr_date`, `pr_picture`) VALUES
(16, 'หนังสือแจ้งผลเลือกตั้ง', 'หนังสือแจ้งผลเลือกตั้ง คปอ', '2022-09-26 10:18:00', 'fileupload/D26-09-20221664162280หนังสือแจ้งผลการเลือกตั้งคปอ.jpg'),
(17, 'แจ้งผลคะแนนเลือกตั้ง', 'แจ้งผลคะแนนเลือกตั้ง ผู้แทนนายจ้าง คปอ', '2022-09-26 10:18:59', 'fileupload/D26-09-20221664162339แจ้งผลคะแนนเลือกตั้งผู้แทนนายจ้างคปอ.000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report_ups`
--

CREATE TABLE `report_ups` (
  `ups_id` int(10) NOT NULL,
  `ups_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ups_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ups_dept` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ups_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ups_m1` varchar(11) NOT NULL,
  `ups_m2` varchar(11) NOT NULL,
  `ups_m3` varchar(11) NOT NULL,
  `ups_m4` varchar(11) NOT NULL,
  `ups_m5` varchar(11) NOT NULL,
  `ups_m6` varchar(11) NOT NULL,
  `ups_m7` varchar(11) NOT NULL,
  `ups_m8` varchar(11) NOT NULL,
  `ups_m9` varchar(11) NOT NULL,
  `ups_m10` varchar(11) NOT NULL,
  `ups_m11` varchar(11) NOT NULL,
  `ups_m12` varchar(11) NOT NULL,
  `ups_years` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_ups`
--

INSERT INTO `report_ups` (`ups_id`, `ups_key`, `ups_location`, `ups_dept`, `ups_user`, `ups_m1`, `ups_m2`, `ups_m3`, `ups_m4`, `ups_m5`, `ups_m6`, `ups_m7`, `ups_m8`, `ups_m9`, `ups_m10`, `ups_m11`, `ups_m12`, `ups_years`) VALUES
(3, 'B63PS001', 'ชั้น1', 'การเงิน', 'เฉลิมพร', 'O', 'O', 'O  O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(4, 'B63PS002', 'ชั้น1', 'การเงิน', 'สะแกวัลย์', 'บ', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(5, 'B63PS003', 'ชั้น1', 'การเงิน', 'อรวรรณ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(6, 'B63PS004', 'ชั้น1', 'การเงิน', 'รุ่งพร', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(7, 'B63PS005', 'ชั้น1', 'ประสานงานขาย', 'จิรกฤต', 'บ', 'O', 'บ', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(8, 'B63PS006', 'ชั้น1', 'ประสานงานขาย', 'พุทธมาศ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(9, 'B63PS007', 'ชั้น1', 'ประสานงานขาย', 'สุริศา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(10, 'B63PS009', 'ชั้น1', 'ประสานงานขาย', 'ปัญธิตา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(11, 'B63PS010', 'ชั้น1', 'ประสานงานขาย', 'วรรณวิภา', 'O', 'O', 'O', 'O', 'O', 'บ', '', '', '', '', '', '', '2022'),
(12, 'B63PS011', 'ชั้น1', 'ประสานงานขาย', 'กมลวรรณ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(13, 'B63PS012', 'ชั้น1', 'ประสานงานขาย', 'สุดาพร', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(14, 'B63PS013', 'ชั้น1', 'ประสานงานขาย', 'ยุ้ย', 'O', 'O', 'บ', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(15, 'B63PS014', 'ชั้น1', 'ประสานงานขาย', 'อรายา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(16, 'B63PS015', 'ชั้น1', 'ประสานงานขาย', 'สุกันธา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(17, '', 'ชั้น1', 'ประสานงานขาย', 'จารุวรรณ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(18, 'B63PS016', 'ชั้น1', 'ผอ.ประสานงานขาย', 'ทีปกร', 'ย', 'ย', 'ย', 'ย', 'ย', 'ย', '', '', '', '', '', '', '2022'),
(19, 'B63PS017', 'ชั้น2', 'ผอ.ส่งออกต่างประเทศ', 'รุ่งเรือง', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(20, 'B63PS018', 'ชั้น2', 'ส่งออกต่างประเทศ', 'ณัฐยาน์', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(21, 'B63PS019', 'ชั้น2', 'ส่งออกต่างประเทศ', 'เบญจพร', 'O', 'บ', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(22, 'B63PS020', 'ชั้น2', 'ส่งออกต่างประเทศ', 'อัจฉรา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(23, 'B63PS021', 'ชั้น2', 'ผอ.จัดซื้อ', 'รณชัย', 'O', 'O', 'O', 'O', 'บ', 'O', '', '', '', '', '', '', '2022'),
(24, 'B63PS022', 'ชั้น2', 'จัดซื้อ', 'บัวศรี', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(25, 'B63PS023', 'ชั้น2', 'จัดซื้อ', 'ธัญยธรณ์', 'บ', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(26, 'B63PS024', 'ชั้น2', 'จัดซื้อ', 'จุฑามาศ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(27, 'B63PS025', 'ชั้น2', 'จัดซื้อ', 'ชนิษฐา', 'O', 'บ', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(28, 'B63PS026', 'ชั้น4', 'บัญชี', 'สุชาดา', 'O', 'O', 'O', 'O', 'บ', 'O', '', '', '', '', '', '', '2022'),
(29, 'B63PS027', 'ชั้น4', 'บัญชี', 'ไพริน', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(30, 'B63PS028', 'ชั้น4', 'บัญชี', 'อัญญดา', 'O', 'O', 'บ', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(31, 'B63PS029', 'ชั้น4', 'บัญชี', 'ชาลิสา', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(32, 'B63PS030', 'ชั้น4', 'บัญชี', 'เบจวรรณ', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(33, 'B63PS031', 'ชั้น4', 'ออกแบบ', 'นันท์นัภส', 'O', 'O', 'บ', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(34, 'B63PS032', 'ชั้น3', 'ออกแบบ', 'ณัฐวดี', 'O', 'บ', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(35, 'B63PS033', 'ชั้น3', 'ฝ่ายบุคคล', 'รัตน์ชนี', 'O', 'O', 'O', 'O', 'O', 'O', '', '', '', '', '', '', '2022'),
(36, 'B63PS034', 'ชั้น5', 'IT', 'IT', 'ย', 'ย', 'ย', 'ย', 'ย', 'ย', '', '', '', '', '', '', '2022'),
(37, 'B63PS035', 'ชั้น5', 'IT', 'IT', 'ย', 'ย', 'ย', 'ย', 'ย', 'ย', '', '', '', '', '', '', '2022'),
(38, '', 'ชั้น1', 'สำรอง ตู้ CCTV', 'IT', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `status_repair`
--

CREATE TABLE `status_repair` (
  `sts_id` int(10) NOT NULL,
  `sts_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_repair`
--

INSERT INTO `status_repair` (`sts_id`, `sts_name`) VALUES
(1, 'รอตรวจสอบ'),
(2, 'กำลังเดินการ'),
(3, 'สำเร็จ'),
(4, 'ยกเลิกการแจ้งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stk_id` int(10) NOT NULL,
  `stk_type` varchar(255) NOT NULL,
  `stk_list` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stk_date` date NOT NULL,
  `stk_qty` int(10) NOT NULL,
  `stk_receive` int(10) NOT NULL,
  `stk_withdraw` int(10) NOT NULL,
  `stk_balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stk_id`, `stk_type`, `stk_list`, `stk_date`, `stk_qty`, `stk_receive`, `stk_withdraw`, `stk_balance`) VALUES
(13, 'Tonner', 'Tonner CF279A', '2022-09-24', 2, 0, 0, 2),
(14, 'Tonner', 'Tonner CE505A/CF280A', '2022-09-24', 7, 0, 0, 7),
(15, 'Tonner', 'Tonner MLT-R116/M2825', '2022-09-24', 2, 0, 0, 2),
(16, 'Tonner', 'Tonner CB435A/CB436A/CE285A/CE278A', '2022-09-24', 2, 0, 0, 2),
(17, 'Laser Tonner', 'Laser Tonner CE285A', '2022-09-24', 2, 0, 0, 2),
(18, 'Tonner', 'Tonner CF279A', '2022-09-24', 1, 0, 0, 1),
(19, 'Tonner', 'Tonner CE285A', '2022-09-24', 1, 0, 0, 1),
(20, 'Tonner', 'Tonner 280A', '2022-09-24', 2, 0, 0, 2),
(21, 'Tonner', 'Tonner CE505A/CF280A เก่า', '2022-09-24', 1, 0, 0, 1),
(22, 'Tonner', 'Tonner CF226A/CRG052', '2022-09-24', 5, 0, 5, 5),
(23, 'Tonner', 'Tonner MLT-D116L M2625', '2022-09-27', 12, 0, 1, 12),
(24, 'Tonner', 'CB435/CB436/CE285A/CE278A', '2022-09-27', 3, 0, 0, 3),
(25, 'Toner Samsung K30000', 'Tonner Samsung MLT-DT704s Black Toner', '2022-10-22', 0, 0, 0, 0),
(26, 'Refill RIBBON EPSON LQ_590', 'Refill RIBBON EPSON LQ_590', '2022-10-22', 16, 0, 0, 16),
(27, 'Epson LQ-2170,2180', 'Refill Ribbon EPSON LQ-2170,2180', '2022-10-22', 39, 0, 0, 39),
(28, 'Epson LQ-2090', 'Refill Ribbon Epson Lq-2090', '2022-10-22', 14, 0, 0, 14),
(30, 'ตลับหมึก Epson LQ-2090 แท้', 'ตลับหมึก Epson LQ-2090 แท้', '2022-10-22', 0, 0, 0, 0),
(31, 'ตลับหมึกแท้ Epson LQ-2170, 2180 แท้', 'ตลับหมึกแท้ Epson LQ-2170, 2180 แท้', '2022-10-22', 0, 0, 0, 0),
(32, 'Epson L310, L385', 'BK664', '2022-10-22', 1, 0, 0, 1),
(33, 'Epson L310, L385', 'C664', '2022-10-22', 1, 0, 0, 1),
(34, 'Epson L310, L385', 'Y664', '2022-10-22', 1, 0, 0, 1),
(35, 'Epson L310, L385', 'M664', '2022-10-22', 2, 0, 0, 2),
(36, 'Brother Ori, HL-T4000DW, 910', 'BTD60BK', '2022-10-22', 5, 0, 0, 5),
(37, 'Brother Ori, HL-T4000DW, 910', 'BT5000Y', '2022-10-22', 4, 0, 0, 4),
(38, 'Brother Ori, HL-T4000DW, 910', 'BT5000M', '2022-10-22', 4, 0, 0, 4),
(39, 'Brother Ori, HL-T4000DW, 910', 'BT5000C', '2022-10-22', 4, 0, 0, 4),
(40, 'Epson L6170', 'Epson L6170 BK001', '2022-10-22', 2, 0, 0, 2),
(41, 'Epson L6170', 'Epson L6170 C001', '2022-10-22', 3, 0, 0, 3),
(42, 'Epson L6170', 'Epson L6170 Y001', '2022-10-22', 5, 0, 0, 5),
(43, 'Epson L6170', 'Epson L6170 M001', '2022-10-22', 4, 0, 0, 4),
(44, 'Canon Pixma g2010', 'BT6000BK', '2022-10-22', 0, 0, 0, 0),
(45, 'Canon Pixma g2010', 'C790', '2022-10-22', 0, 0, 0, 0),
(46, 'Canon Pixma g2010', 'M790', '2022-10-22', 0, 0, 0, 0),
(47, 'Canon Pixma g2010', 'Y790', '2022-10-22', 0, 0, 0, 0),
(48, 'Epson ซับหมึก L6170', 'Epson ซับหมึก L6170', '2022-10-22', 2, 0, 1, 2),
(49, 'Ribbon Cartridge ', 'Ribbon Cartridge LQ-590 590H', '2022-10-22', 3, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `type_repair`
--

CREATE TABLE `type_repair` (
  `typ_id` int(10) NOT NULL,
  `typ_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_repair`
--

INSERT INTO `type_repair` (`typ_id`, `typ_name`) VALUES
(1, 'แก้ไขปัญหาด้าน Software'),
(3, 'แก้ไขปัญหาด้าน Hardware'),
(4, 'การแก้ปัญหาด้านระบบเครือข่าย'),
(5, 'จัดทำเอกสาร'),
(6, 'ประชุม/อบรม/สัมนา');

-- --------------------------------------------------------

--
-- Table structure for table `user_louis`
--

CREATE TABLE `user_louis` (
  `user_id` int(10) NOT NULL,
  `user_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_department` int(10) NOT NULL,
  `user_branch` int(10) NOT NULL,
  `user_level` int(10) NOT NULL,
  `user_enable` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_louis`
--

INSERT INTO `user_louis` (`user_id`, `user_user`, `user_password`, `user_name`, `user_department`, `user_branch`, `user_level`, `user_enable`) VALUES
(9, 'Aekkachai', 'it01', 'it01', 2, 1, 2, 0),
(15, 'Test', 'it02', 'It02', 5, 0, 2, 0),
(17, 'เอกชัย นามวิชา', 'Aek20663', 'Aekkchaina@louistapes.com', 2, 1, 2, 0),
(18, 'ศศิวิมล จากงูเหลือม', '123456', 'sasi@gmail.com', 3, 2, 3, 0),
(19, 'ดาราพร พาหา', '11223344', 'nary@gmail.com', 6, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_repair`
--

CREATE TABLE `user_repair` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_branch` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_repair`
--

INSERT INTO `user_repair` (`user_id`, `user_name`, `user_position`, `user_branch`) VALUES
(1, 'เอกชัย นามวิชา', 'ไอที', 1),
(2, 'จิราพร พรมสวัส', 'SA', 2),
(3, 'Mr. Adum misser', 'Project Manager', 3),
(4, 'ประยุทธ จันทร์โอชา', 'รปภ.', 3),
(5, 'ประวิตร วงศ์สุวรรณ', '', 1),
(6, 'ประวิตร วงศ์สุวรรณ', 'หกดหดก', 2);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_stk`
--

CREATE TABLE `withdraw_stk` (
  `wtd_id` int(10) NOT NULL,
  `wtd_stk` int(10) NOT NULL,
  `wtd_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `wtd_list` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `wtd_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `wtd_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `wtd_balance` int(10) NOT NULL,
  `wtd_withdraw` int(10) NOT NULL,
  `wtd_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withdraw_stk`
--

INSERT INTO `withdraw_stk` (`wtd_id`, `wtd_stk`, `wtd_type`, `wtd_list`, `wtd_user`, `wtd_date`, `wtd_balance`, `wtd_withdraw`, `wtd_detail`) VALUES
(10, 22, 'Tonner', 'Tonner CF226A/CRG052', 'Aekkachai', '2022-09-27 03:32:42pm', 8, 1, 'ประสานงานขาย'),
(11, 22, 'Tonner', 'Tonner CF226A/CRG052', 'Aekkachai', '2022-09-27 03:41:11pm', 5, 4, 'It'),
(12, 23, 'Tonner', 'Tonner MLT-D116L M2625', 'Test', '2022-10-22 10:41:26am', 12, 1, 'ส่งออก'),
(13, 48, 'Epson ซับหมึก L6170', 'Epson ซับหมึก L6170', 'Aekkachai', '2022-10-22 01:21:48pm', 2, 1, 'ฝ่ายส่งออก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`brn_id`);

--
-- Indexes for table `category_it`
--
ALTER TABLE `category_it`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `department_repair`
--
ALTER TABLE `department_repair`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eqm_id`);

--
-- Indexes for table `inventory_repair`
--
ALTER TABLE `inventory_repair`
  ADD PRIMARY KEY (`invt_id`);

--
-- Indexes for table `it_problem`
--
ALTER TABLE `it_problem`
  ADD PRIMARY KEY (`itp_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `public_relations`
--
ALTER TABLE `public_relations`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `report_ups`
--
ALTER TABLE `report_ups`
  ADD PRIMARY KEY (`ups_id`);

--
-- Indexes for table `status_repair`
--
ALTER TABLE `status_repair`
  ADD PRIMARY KEY (`sts_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stk_id`);

--
-- Indexes for table `type_repair`
--
ALTER TABLE `type_repair`
  ADD PRIMARY KEY (`typ_id`);

--
-- Indexes for table `user_louis`
--
ALTER TABLE `user_louis`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_repair`
--
ALTER TABLE `user_repair`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdraw_stk`
--
ALTER TABLE `withdraw_stk`
  ADD PRIMARY KEY (`wtd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `brn_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_it`
--
ALTER TABLE `category_it`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department_repair`
--
ALTER TABLE `department_repair`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eqm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory_repair`
--
ALTER TABLE `inventory_repair`
  MODIFY `invt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `it_problem`
--
ALTER TABLE `it_problem`
  MODIFY `itp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `public_relations`
--
ALTER TABLE `public_relations`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `report_ups`
--
ALTER TABLE `report_ups`
  MODIFY `ups_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `status_repair`
--
ALTER TABLE `status_repair`
  MODIFY `sts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `type_repair`
--
ALTER TABLE `type_repair`
  MODIFY `typ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_louis`
--
ALTER TABLE `user_louis`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_repair`
--
ALTER TABLE `user_repair`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `withdraw_stk`
--
ALTER TABLE `withdraw_stk`
  MODIFY `wtd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
