<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $firstName = htmlspecialchars(strip_tags($_POST['first_name']));
    $lastName = htmlspecialchars(strip_tags($_POST['last_name']));
    $guardianName = htmlspecialchars(strip_tags($_POST['guardian_name']));
    $contact = htmlspecialchars(strip_tags($_POST['guardian_contact']));

    // Validate input
    if (empty($firstName) || empty($lastName) || empty($guardianName) || empty($contact)) {
        $message = "All fields are required.";
    } else {
        // Email setup
        $to = "your-email@example.com"; // Replace with your actual email
        $subject = "New Pre-Enrollment Submission";
        $body = "Student Name: $firstName $lastName\nGuardian: $guardianName\nContact: $contact";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $body, $headers)) {
            $message = "✅ Thank you! Your submission has been received.";
        } else {
            $message = "❌ Oops! Something went wrong while sending the email.";
        }
    }
}
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
  BASIC EDUCATION/ADMISSION
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
      scroll-behavior: smooth;
      background-color: blue;
    }

  </style>
 </head>
 <body class="bg-blue-500 text-white">
  <!-- Header -->
  <header class="bg-white shadow">
   <div class="container mx-auto flex flex-col md:flex-row items-center justify-between p-4 md:p-6">
    <a class="flex items-center space-x-3" href="https://www.pma.edu.ph">
     <img alt="Philippine Merchant Marine Academy official logo, blue and gold emblem with ship and anchor" class="w-16 h-16 object-contain" height="80" src="logo.png" width="80"/>
     <div>
      <h1 class="text-2xl font-bold text-blue-900">
       BASIC EDUCATION
      </h1>
      <p class="text-sm text-gray-600">
       SOUTHERN MINDANAO INSTITUTE OF TECHNOLY, INC.
      </p>
     </div>
    </a>
    <nav class="mt-4 md:mt-0">
     <ul class="flex space-x-6 text-blue-800 font-semibold">
      <li>
       <a class="hover:text-blue-600" href="WEB2.html">
        Home
       </a>
      </li>
      <li>
       <a class="text-blue-600 border-b-2">
        Admission
       </a>
      </li>
      <li><a href="#enrollment" class="hover:text-indigo-600 transition">Pre-Enroll</a></li>

     </ul>
    </nav>
   </div>
  </header>
  <!-- Hero Section -->
 
  <!-- Admission Requirements Section -->
  <section class="container mx-auto px-4 py-12" id="admission-requirements">
   <h3 class="text-2xl font-bold text-white mb-8 text-center">
    Admission Requirements
   </h3>
   <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
    <div>
     <h4 class="text-xl font-semibold text-white mb-4">
      INCOMING GRADE 1,7 AND TRANSFEREES
     </h4>
     <ul class="list-disc list-inside space-y-2 text-white">
      <li>
       Original Report Card
      </li>
      <li>
       PSA (photocopy)
      </li>
      <li>
       Cerficate of Good Moral Character
      </li>
      <li>
       2 copies of 2x2 ID colored picture
      </li>
      <li>
       1 long size Brown Envilop
      </li>
      <li>
       ESC Certificates from Private Schools
      </li>
     </ul>
    </div>
    <div><div>
     <h4 class="text-xl font-semibold text-white mb-4">
      INCOMING GRADE 1,7 AND TRANSFEREES
     </h4>
         <li>
       Original Report Card
      </li>
      <li>
       PSA (photocopy)
      </li>
      <li>
       Cerficate of Good Moral Character
      </li>
      <li>
       2 copies of 2x2 ID colored picture
      </li>
      <li>
       1 long size Brown Envilop
      </li>
      <li>
       ESC Certificates from Private Schools
      </li>
     </ul>
    </div>
  </section>
  <!-- Important Dates Section -->
  <section class="container mx-auto px-4 py-12 max-w-4xl">
   <h3 class="text-2xl font-bold text-blue-900 mb-8 text-center">
    Important Dates
   </h3>
   <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 text-gray-700 text-center">
    <div class="bg-blue-50 rounded-lg p-6 shadow">
     <i class="fas fa-pencil-alt text-blue-700 text-4xl mb-4">
     </i>
     <h4 class="text-xl font-semibold mb-2">
      Start of Classes
     </h4>
     <p>
      june 23, 2025
     </p>
    </div>
    <div class="bg-blue-50 rounded-lg p-6 shadow">
     <i class="fas fa-user-check text-blue-700 text-4xl mb-4">
     </i>
     <h4 class="text-xl font-semibold mb-2">
      Enrollment start on
     </h4>
     <p>
      May 5, 2025
     </p>
    </div>
   </div>
  </section>
  <!-- Contact Admission Office Section -->
  <section class="bg-blue-900 text-white py-12">
   <div class="container mx-auto px-4 max-w-4xl text-center">
    <h3 class="text-2xl font-bold mb-6">
     Contact the Admission Office
    </h3>
    <p class="mb-4 max-w-xl mx-auto">
     For inquiries and assistance, please reach out to the SMIT Admission Office through the following:
    </p>
    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-12 text-lg">
     <div class="flex items-center space-x-3 justify-center">
      <i class="fas fa-phone-alt text-2xl">
      </i>
      <span>
       +63 912 345 678
      </span>
     </div>
     <div class="flex items-center space-x-3 justify-center">
      <i class="fas fa-envelope text-2xl">
      </i>
      <span>
       Smit@gmail.com
      </span>
     </div>
     <div class="flex items-center space-x-3 justify-center">
      <i class="fas fa-map-marker-alt text-2xl">
      </i>
      <span>
       Tacurong city, Sultan Kudarat, Philippines
      </span>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 py-6">
   <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm">
    <p>
     © 2025. Basic Education. All rights reserved.
    </p>
    <ul class="flex space-x-6 mt-4 md:mt-0">
     <li>
      <a class="hover:text-white" href="https://www.facebook.com/PMMAOfficial" rel="noopener" target="_blank">
       <i class="fab fa-facebook-f">
       </i>
       <span class="sr-only">
        Facebook
       </span>
      </a>
     </li>
     <li>
      <a class="hover:text-white" href="https://twitter.com/PMMAOfficial" rel="noopener" target="_blank">
       <i class="fab fa-twitter">
       </i>
       <span class="sr-only">
        Twitter
       </span>
      </a>
     </li>
     <li>
      <a class="hover:text-white" href="https://www.youtube.com/PMMAOfficial" rel="noopener" target="_blank">
       <i class="fab fa-youtube">
       </i>
       <span class="sr-only">
        YouTube
       </span>
      </a>
     </li>
     <li>
      <a class="hover:text-white" href="https://www.linkedin.com/school/philippine-merchant-marine-academy/" rel="noopener" target="_blank">
       <i class="fab fa-linkedin-in">
       </i>
       <span class="sr-only">
        LinkedIn
       </span>
      </a>
     </li>
    </ul>
   </div>
  </footer>
  <!-- Enrollment Form -->
<section id="enrollment" class="bg-indigo-600 py-16 text-black">
  <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-3xl font-extrabold text-white text-center mb-12">Pre - Enrollment Form</h2>
    <form action="send.php" method="POST" class="max-w-3xl mx-auto bg-indigo-600 p-8 rounded-lg shadow-lg space-y-6">
      
      <!-- Student Info -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-white font-semibold mb-2" for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>
        <div>
          <label class="block text-white font-semibold mb-2" for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>
        <div>
          <label class="block ttext-white font-semibold mb-2" for="birth_date">Date of Birth</label>
          <input type="date" id="birth_date" name="birth_date" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>
        <div>
          <label class="block text-white font-semibold mb-2" for="grade_level">Grade Level</label>
          <select id="grade_level" name="grade_level" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600">
            <option value="">Select Grade</option>
            <option value="Kinder">Kinder</option>
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
          </select>
        </div>
      </div>

      <!-- Contact Info -->
      <div>
        <label class="block text-white font-semibold mb-2" for="address">Home Address</label>
        <input type="text" id="address" name="address" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
      </div>
       <div>
          <label class="block text-white font-semibold mb-2" for="guardian_contact">Your Contact Number</label>
          <input type="tel" id="guardian_contact" name="guardian_contact" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>

      <!-- Guardian Info -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-white font-semibold mb-2" for="guardian_name">Guardian's Full Name</label>
          <input type="text" id="guardian_name" name="guardian_name" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>
        <div>
          <label class="block text-white font-semibold mb-2" for="guardian_contact">Guardian's Contact Number</label>
          <input type="tel" id="guardian_contact" name="guardian_contact" required class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-600" />
        </div>
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit" class="bg-indigo-900 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-indigo-700 transition">Submit Enrollment</button>
      </div>
    </form>
  </div>
</section>

 </body>
</html>
