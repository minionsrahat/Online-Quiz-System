# Tech Quiz: An Online Quiz System

Tech Quiz is an online quiz platform designed for students to participate in multiple-choice quizzes. The system offers a range of features for both students and administrators.

## Features for Students:

1. Topic-Wise Quizzes: Students can select quizzes based on specific topics such as Java, C, C++, etc.

2. Difficulty Selection: Students can choose the difficulty level of the quiz, and the system will generate an appropriate time limit based on the selected difficulty.

3. Answer Display: After completing the quiz, students can view the correct answers.

4. Quiz Results: Students can access and view their quiz results, including scores and performance metrics.

5. Previous Quiz Results: Students can also review their results from previous quizzes.

6. Discussion Forum: A dedicated discussion forum is available for students to post questions about problems they are facing. Other students can provide solutions by commenting on the posts.

## Features for Admin:

1. User Management: The admin has the ability to remove users from the system.

2. Category, Question, and Option Management: Administrators can add new categories, questions, and options to expand the quiz library.

3. Difficulty and Time Settings: The administrator can define different difficulty levels and set corresponding time limits for each level.

4. Spam Control: The admin has the authority to delete any spam questions and comments from the discussion forum, ensuring a clean and relevant environment for students.

Please note that this is a brief overview of the Tech Quiz system. If you have any questions or require further information, please feel free to reach out.

## Installation Procedure

1. Clone the Repository:
   - Open your terminal or command prompt.
   - Navigate to the directory where you want to clone the repository.
   - Run the following command to clone the repository:

     ```shell
     git clone https://github.com/minionsrahat/Online-Quiz-System/tree/master
     ```

2. Import the Database:
   - Start XAMPP and ensure that the Apache and MySQL services are running.
   - Open phpMyAdmin by visiting `http://localhost/phpmyadmin` in your web browser.
   - Create a new database called `techquiz`.
   - Select the `techquiz` database from the left sidebar.
   - Click on the "Import" tab.
   - Choose the `techquiz.sql` file from the cloned repository's directory.
   - Click "Go" to import the SQL file and create the necessary tables.

3. Set Up Local Development:
   - Copy the cloned repository folder to the `htdocs` directory of your XAMPP installation. By default, this path is `C:\xampp\htdocs` on Windows and `/Applications/XAMPP/htdocs` on macOS.
   - Rename the project folder to `techquiz`.

4. Start the Local Server:
   - Start XAMPP and ensure that the Apache and MySQL services are running.
   - Open your web browser and visit `http://localhost/techquiz` to access the Tech Quiz project.

That's it! You have successfully cloned the repository and installed the Tech Quiz project on your local machine using XAMPP.

Please note that if you have customized the XAMPP installation or made changes to the project structure, you may need to adjust the instructions accordingly.

If you encounter any issues during the installation process, please feel free to reach out for further assistance.

