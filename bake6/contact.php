<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us - Huda’s Bakery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      background-color: rgb(253, 218, 180);
      font-family: 'Poppins', sans-serif;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
      overflow-y: hidden;
    }

    /* Background floating wheat container */
    .floating-wheat-bg {
      position: fixed;
      top: 0; left: 0;
      width: 100vw;
      height: 100vh;
      pointer-events: none;
      z-index: 0;
      overflow: visible;
    }

    /* Wheat shapes flying vertically fast */
    .wheat-big {
      position: absolute;
      bottom: -180px; /* start below screen */
      fill: #d4a85a;
      opacity: 0.8;
      filter: drop-shadow(0 0 5px #d4a85a88);
      animation-name: flyUpRotateFade;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      transform-origin: center;
      will-change: transform, opacity;
    }

    /* Different positions, sizes, durations, and delays for variety */
    .wheat-big:nth-child(1) {
      left: 8%;
      width: 180px;
      height: 180px;
      animation-duration: 10s; /* Faster */
      animation-delay: 0s;
    }
    .wheat-big:nth-child(2) {
      left: 28%;
      width: 160px;
      height: 160px;
      animation-duration: 11s;
      animation-delay: 2s;
    }
    .wheat-big:nth-child(3) {
      left: 52%;
      width: 200px;
      height: 200px;
      animation-duration: 9.5s;
      animation-delay: 4s;
    }
    .wheat-big:nth-child(4) {
      left: 78%;
      width: 170px;
      height: 170px;
      animation-duration: 10.5s;
      animation-delay: 1s;
    }

    /* Animation: move up, rotate, fade out */
    @keyframes flyUpRotateFade {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 0.8;
      }
      90% {
        opacity: 1;
      }
      100% {
        transform: translateY(-130vh) rotate(360deg);
        opacity: 0;
      }
    }

    /* Contact form styles */
    .contact-container {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.95);
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }
    .contact-container:hover {
      transform: translateY(-5px);
    }
    h2 {
      text-align: center;
      color: #a14e2c;
      font-family: 'Sansita Swashed', cursive;
      font-size: 32px;
      margin-bottom: 30px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    input, textarea {
      width: 100%;
      padding: 14px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 16px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }
    input:focus, textarea:focus {
      outline: none;
      border-color: #a14e2c;
      box-shadow: 0 0 8px rgba(161, 78, 44, 0.4);
    }
    button {
      background-color: #a14e2c;
      color: white;
      padding: 14px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      width: 100%;
    }
    button:hover {
      background-color: #823c1b;
      transform: scale(1.03);
      box-shadow: 0 8px 16px rgba(161, 78, 44, 0.3);
    }
    input::placeholder, textarea::placeholder {
      color: #888;
      font-size: 15px;
    }
    @media (max-width: 480px) {
      body {
        padding: 20px 10px;
      }
      .contact-container {
        padding: 25px 20px;
      }
      h2 {
        font-size: 24px;
      }
      input, textarea, button {
        font-size: 15px;
        padding: 12px;
      }
    }
  </style>
</head>
<body>

  <div class="floating-wheat-bg" aria-hidden="true">
    <svg class="wheat-big" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
      <path d="M12 2L13 7L15 6L13 11L17 12L13 13L14 18L12 14L10 18L11 13L7 12L11 11L9 6L11 7L12 2Z"/>
    </svg>
    <svg class="wheat-big" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
      <path d="M12 2L13 7L15 6L13 11L17 12L13 13L14 18L12 14L10 18L11 13L7 12L11 11L9 6L11 7L12 2Z"/>
    </svg>
    <svg class="wheat-big" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
      <path d="M12 2L13 7L15 6L13 11L17 12L13 13L14 18L12 14L10 18L11 13L7 12L11 11L9 6L11 7L12 2Z"/>
    </svg>
    <svg class="wheat-big" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
      <path d="M12 2L13 7L15 6L13 11L17 12L13 13L14 18L12 14L10 18L11 13L7 12L11 11L9 6L11 7L12 2Z"/>
    </svg>
  </div>

  <div class="contact-container">
    <h2>Contact Us</h2>
    <form action="contact-submit.php" method="post">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="number" placeholder="Your Phone Number" required />
      <textarea name="remark" rows="4" placeholder="Your Remark" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>
