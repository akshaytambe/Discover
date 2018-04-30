-- Authors: Akshay Tambe (apt321@nyu.edu) | Manjiri Acharekar (msa530@nyu.edu)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table structure for table `Comments`
CREATE TABLE `Comments` (
  `c_id` bigint(50) NOT NULL,
  `c_author_id` bigint(11) NOT NULL,
  `c_post_id` bigint(11) NOT NULL,
  `c_content` varchar(10000) CHARACTER SET utf8mb4 NOT NULL,
  `c_edited` int(11) NOT NULL DEFAULT '0',
  `c_time_edited` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `c_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Follow`
CREATE TABLE `Follow` (
  `id` bigint(11) NOT NULL,
  `uf_one` bigint(11) NOT NULL,
  `uf_two` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Likes`
CREATE TABLE `Likes` (
  `id` bigint(11) NOT NULL,
  `liker` bigint(11) NOT NULL,
  `post_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Messages`
CREATE TABLE `Messages` (
  `id` int(11) NOT NULL,
  `m_id` bigint(11) NOT NULL,
  `message` varchar(1538) CHARACTER SET utf8mb4 NOT NULL,
  `m_from` bigint(11) NOT NULL,
  `m_to` bigint(11) NOT NULL,
  `m_time` int(11) NOT NULL,
  `m_seen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `DiaryNotes`
CREATE TABLE `DiaryNotes` (
  `main_id` int(11) NOT NULL,
  `id` bigint(20) NOT NULL,
  `author_id` bigint(11) NOT NULL,
  `note_title` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `note_content` varchar(10000) CHARACTER SET utf8mb4 NOT NULL,
  `note_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Notifications`
CREATE TABLE `Notifications` (
  `id` int(11) NOT NULL,
  `n_id` bigint(11) NOT NULL,
  `from_id` bigint(11) NOT NULL,
  `for_id` bigint(11) NOT NULL,
  `notifyType_id` bigint(11) NOT NULL,
  `notifyType` varchar(100) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `FavFriend`
CREATE TABLE `FavFriend` (
  `id` bigint(11) NOT NULL,
  `u_id` bigint(11) NOT NULL,
  `p_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `SavedPost`
CREATE TABLE `SavedPost` (
  `main_id` int(11) NOT NULL,
  `id` bigint(20) NOT NULL,
  `post_id` bigint(11) NOT NULL,
  `user_saved_id` bigint(11) NOT NULL,
  `saved_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Register`
CREATE TABLE `Register` (
  `main_id` int(11) NOT NULL,
  `id` bigint(50) NOT NULL,
  `Fullname` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Username` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `followers` int(100) NOT NULL DEFAULT '0',
  `Userphoto` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `user_cover_photo` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `school` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `work` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `work0` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `country` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `birthday` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `verify` int(11) NOT NULL,
  `website` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `bio` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `admin` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `gender` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `login_attempts` int(11) NOT NULL,
  `language` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `aSetup` int(11) NOT NULL DEFAULT '0',
  `online` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Feedback`
CREATE TABLE `Feedback` (
  `id` int(11) NOT NULL,
  `r_id` bigint(11) NOT NULL,
  `from_id` bigint(11) NOT NULL,
  `for_id` bigint(11) NOT NULL,
  `r_type` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `subject` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `report` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `r_time` int(11) NOT NULL,
  `r_replay` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `r_replay_time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Typing`
CREATE TABLE `Typing` (
  `id` bigint(11) NOT NULL,
  `t_from` bigint(11) NOT NULL,
  `t_to` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `Post`
CREATE TABLE `Post` (
  `post_id` bigint(50) NOT NULL,
  `author_id` bigint(11) NOT NULL,
  `post_img` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `post_time` int(11) NOT NULL,
  `post_content` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `p_title` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `p_likes` int(100) NOT NULL DEFAULT '0',
  `p_privacy` int(11) NOT NULL DEFAULT '0',
  `shared` varchar(1000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Indexes for dumped tables
-- --------------------------------------------------------
-- Indexes for table `Comments`
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`c_id`);
-- --------------------------------------------------------
-- Indexes for table `Follow`
ALTER TABLE `Follow`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `Likes`
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `Messages`
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `DiaryNotes`
ALTER TABLE `DiaryNotes`
  ADD PRIMARY KEY (`main_id`);
-- ------------------------------------------------------
-- Indexes for table `Notifications`
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `FavFriend`
ALTER TABLE `FavFriend`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `SavedPost`
ALTER TABLE `SavedPost`
  ADD PRIMARY KEY (`main_id`);
-- ------------------------------------------------------
-- Indexes for table `Register`
ALTER TABLE `Register`
  ADD PRIMARY KEY (`main_id`);
-- ------------------------------------------------------
-- Indexes for table `Feedback`
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `Typing`
ALTER TABLE `Typing`
  ADD PRIMARY KEY (`id`);
-- ------------------------------------------------------
-- Indexes for table `Post`
ALTER TABLE `Post`
  ADD PRIMARY KEY (`post_id`);

-- ------------------------------------------------------
-- AUTO_INCREMENT for dumped tables
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Comments`
ALTER TABLE `Comments`
  MODIFY `c_id` bigint(50) NOT NULL AUTO_INCREMENT;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Follow`
ALTER TABLE `Follow`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Likes`
ALTER TABLE `Likes`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Messages`
ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `DiaryNotes`
ALTER TABLE `DiaryNotes`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Notifications`
ALTER TABLE `Notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `FavFriend`
ALTER TABLE `FavFriend`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `SavedPost`
ALTER TABLE `SavedPost`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Register`
ALTER TABLE `Register`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Feedback`
ALTER TABLE `Feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
-- ------------------------------------------------------
-- AUTO_INCREMENT for table `Typing`
ALTER TABLE `Typing`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
