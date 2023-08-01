# CourseFeedbackWeb

The Course Feedback Website acts as a bridge between users and the database. The Authentication System validates user identity and access rights. Users can easily search for courses using the robust search engine and provide feedback through the Feedback Module, which is stored in the Feedback Database. The Privacy Module ensures the protection of user identity where necessary. The Report System allows users to flag inappropriate feedback, aiding in moderation. The website can also engage with Third-party Services/APIs to enhance its functionality, offering a comprehensive and optimized user experience.

## System requirement
**1. Users:** These include both general users (who could be students, instructors) providing and accessing feedback, and administrators managing the site. Users can be affiliated with individual schools.

**1. Course Feedback Website:** This is a user-friendly, comprehensive platform where users can find and review courses, and view feedback from others. The site will provide an effective search engine to facilitate course search by multiple parameters including semester, year, course name, CRN, and instructor name.

**1. Privacy Module**: This component ensures users can give feedback anonymously, encouraging honest input. This module will also include safeguards to prevent abuse of the anonymity feature.

**1. Course Database:** This contains detailed information about courses across different schools. Each course's long title is auto-generated from the course code, enhancing the efficiency of data management.

**1. Feedback Database:** This stores all feedback from users. The structured nature of the data allows for efficient analysis and continuous improvement of the platform.

**1. Feedback Module:** This includes a Likert scale questionnaire for consistent feedback, a free-form question section for additional insights, and a report system to maintain the integrity of feedback.

**1. School Database:** This feature has been added to facilitate management of courses and feedback at the school level.

**1. Authentication System:** This system, integrated with Google API, allows users to create and log in to their accounts using their Google credentials, ensuring secure and convenient access.

**1. Report System:** This system enables users to report inappropriate feedback, helping maintain a respectful environment conducive to constructive input.

**1. Third-party Services/APIs:** The site can integrate with third-party services, such as direct university database querying and social media sharing, enhancing its functionality.
