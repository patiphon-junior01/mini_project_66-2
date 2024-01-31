<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>กราฟเเสดงข้อมูลอุณหภูมิเเละความชื้นในอากาศหรือในอาคาร</title>
  <link rel="stylesheet" href="asset/framwork/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="asset/framwork/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/dashboard.css">
</head>

<body>
  <!-- content -->
  <div class="header-bar" id="header">
    <h1> <span class="mx-2"><i class="fas fa-temperature-high"></i></span>
      <a href="#header" class="a-none">It66.iot-cm.com/it66g6</a>
    </h1>
    <ul class="d-flex gap-4 align-item-center">
      <li><a href="#"><i class="fas fa-home"></i> หน้าเเรก</a></li>
      <li><a href="#ปัญหาเเละความเป็นมา"> ปัญหาเเละความเป็นมา</a></li>
      <li><a href="#อุปกรณ์ที่ใช้งาน"> อุปกรณ์ที่ใช้งาน</a></li>
      <li><a href="#หลัการทำงาน"> หลัการทำงาน</a></li>
      <li><a href="#กลุ่มผู้จัดทำ"> กลุ่มผู้จัดทำ</a></li>
      <li><a href="/it66g6/Web/product.php"><i class="fas fa-temperature-low"></i> หน้าอุณหภูมิเเละความชื้นในอากาศ</a>
      </li>
    </ul>
  </div>

  <div class="d-flex justify-content-center ">
    <div class="main-content-index">
      <!-- <div>
        <h1>
          Mini Project อุปกรณ์ตรวจอุณหภูมิเเละความชื้นในอากาศ
        </h1>
      </div> -->
      <div class="content">
        <p class=" mb-5  fs-5">Welcome to my project</p>
        <p class="  mb-5 fw-bold fs-1">อุปกรณ์ตรวจอุณหภูมิ <br> เเละความชื้นภายในอากาศ</p>
        <p class="mb-0  fs-5">Mini project iot จัดทำเพื่อการศึกษา</p>
      </div>
      <div class="content-image">
        <img src="asset/img/main-section.jpg" alt="project-iot">
      </div>
    </div>
  </div>


  <!-- ความเป็นมา -->
  <div id="ปัญหาเเละความเป็นมา" class="mb-5 top-slider"></div>
  <div class="tool-pd mt-5 d-flex flex-column align-items-center px-5">
    <h2 class="fw-bold mb-4"><i class="fas fa-exclamation-circle"></i> ปัญหาเเละความเป็นมา</h2>
    <div class="px-5 mb-5">
      <p class="fs-5">
        <span class="mx-4"></span>
        ในยุคปัจจุบัน เทคโนโลยี IoT (Internet of Things) ได้เข้ามามีบทบาทในชีวิตประจำวันของเรามากขึ้น
        ไม่ว่าจะเป็นในครัวเรือน การเกษตร สิ่งแวดล้อม หรือแม้แต่คุณภาพอากาศที่เราหายใจเข้าไปทุกวัน

        คุณภาพอากาศที่ดีมีความสำคัญต่อสุขภาพของมนุษย์ อุณหภูมิและความชื้นที่สูงหรือต่ำเกินไปอาจส่งผลเสียต่อสุขภาพ เช่น
        ทำให้เกิดโรคทางเดินหายใจ โรคภูมิแพ้ และโรคอื่นๆ นอกจากนี้ สารปนเปื้อนในอากาศ เช่น ฝุ่นละออง PM 2.5
        ก็สามารถก่อให้เกิดอันตรายต่อสุขภาพได้เช่นกัน

        ในอาคารเรียน อุณหภูมิและความชื้นที่เหมาะสมจะช่วยให้ผู้เรียนรู้สึกสบาย ไม่ป่วยง่าย นอกจากนี้
        การควบคุมอุณหภูมิและความชื้นในอาคารเรียนยังช่วยป้องกันความเสียหายต่ออุปกรณ์ต่างๆ ในอาคารได้อีกด้วย

        การนำเทคโนโลยี IoT มาใช้ในการตรวจสอบอุณหภูมิและความชื้นในอากาศและภายในอาคารเรียน
        จะช่วยให้เราสามารถติดตามและควบคุมอุณหภูมิและความชื้นให้อยู่ในระดับที่เหมาะสมได้
        เทคโนโลยีนี้สามารถช่วยลดความเสี่ยงต่อการเกิดปัญหาสุขภาพและความเสียหายต่ออุปกรณ์ต่างๆ ในอาคารได้
      </p>
    </div>
  </div>


  <!-- อุปกรณ์ที่ใช้งาน -->
  <div id="อุปกรณ์ที่ใช้งาน" class="mb-5 top-slider"></div>
  <div class="tool-pd mt-5 d-flex flex-column align-items-center">
    <h2 class="fw-bold mb-0"><i class="fas fa-tools"></i> อุปกรณ์ที่ใช้งาน</h2>
    <div class="mt-4 row ">
      <div class="col-xl-4">
        <div class="card-tool">
          <img src="asset/img/19ed9101-f7df-4160-94fa-07ebb549ab3b.jfif" alt="tool">
          <div class="content-foo">
            <h4>
              Esp32
            </h4>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card-tool">
          <img src="asset/img/7aac956f-2ff0-491a-b263-d5e26df45f1d.jfif" alt="tool">
          <div class="content-foo">
            <h4>
              Protoboard Breadboard 830
            </h4>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card-tool">
          <img src="asset/img/ae412a81-f80b-474f-abe6-0296123042fb.jfif" alt="tool">
          <div class="content-foo">
            <h4>
              lcd i2c interface
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5 row ">
      <div class="col-xl-6">
        <div class="card-tool">
          <img src="asset/img/f15fe798-e4d6-4888-bf2a-1f3c0000f0a0.jfif" alt="tool">
          <div class="content-foo">
            <h4>
              DHT11
            </h4>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card-tool">
          <img src="asset/img/fabff190-9b36-42be-8035-7bd52bb4a5ae.jfif" alt="tool">
          <div class="content-foo">
            <h4>
              Cable jumper
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- หลัการทำงาน -->
  <div id="หลัการทำงาน" class="mb-5 top-slider"></div>
  <div class="tool-pd mt-5 d-flex flex-column  px-5" style="margin-top:150px !important">
    <div class="text-center">
      <h2 class="fw-bold mb-2"><i class="fas fa-network-wired"></i> หลักการทำงาน</h2>
    </div>
    <div class="px-5 mb-5 text-center">
      <img src="asset/img/process-iot-dht.png" alt="process-iot-dht" class="process-iot-dht">
    </div>
    <div class="px-5 mb-3">
      <ui>
        <li><span class="fw-bold">Step 1</span> : DHT11 รับค่าอุณหภูมิเเละความชื้นส่งข้อมูลมาที่ ESP32</li>
        <li><span class="fw-bold">Step 2</span> : ESP32 ส่งข้อมูลอุณหภูมิเเละความชื้นไปยัง Lcd เพื่อเเสดงข้อมูล</li>
        <li><span class="fw-bold">Step 3</span> : หาก ESP32 มีการ Connect WIFI หรือ Internet
          จะส่งข้อมูลอุณหภูมิเเละความชื้น ผ่าน HTTP ไปยัง Web service</li>
        <li><span class="fw-bold">Step 4</span> : Web service รับข้อมูลอุณหภูมิเเละความชื้นเเล้ว
          บันทึกลงฐานข้อมูลหากบันทึกสำเร็จจะส่งตอบกลับ ESP32 ว่าบันทึกสำเร็จเเล้ว</li>
        <li><span class="fw-bold">Step 5</span> : Client Browser คือ Users ที่เข้ามาใช้งาน web
          เเล้วเมื่อเข้าใช้งานจะได้รับข้อมูล อุณหภูมิเเละความชื้น จาก ฐานข้อมูลเพื่อเห็นค่าต่างๆผ่านหน้า website >>
          <span><a href="/it66g6/Web/product.php" class="text-dark" target="_blank" rel="noopener noreferrer"><i
                class="fas fa-temperature-low"></i> หน้าอุณหภูมิเเละความชื้นในอากาศ</a></span>
        </li>
      </ui>
    </div>
    <div class="px-5  mb-5">
      <h3>ดาวน์โหลด Source Code ได้ที่ >> <span><a href="https://github.com/patiphon-junior01/mini_project_66-2"
            class="text-dark" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i> Github</a></span>
      </h3>
    </div>
  </div>


  <!-- รายชื่อสมาชิก -->
  <div id="กลุ่มผู้จัดทำ" class="mb-5 top-slider"></div>
  <div class="tool-pd mt-5 d-flex flex-column  px-5" style="margin-top:100px !important">
    <div class="text-center mb-5">
      <h2 class="fw-bold mb-2"><i class="fas fa-users"></i> กลุ่มผู้จัดทำ</h2>
    </div>
    <div class="row px-5 mb-5">
      <div class="col-xl-4 mb-3  px-2">
        <div class="box-members">
          <img src="asset/img/members/008.webp" alt="008">
          <div class="content my-4">
            <p>6649010008</p>
            <p>นาย ปฎิพล วงศ์ศรี</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 mb-3  px-2">
        <div class="box-members">
          <img src="asset/img/members/021.webp" alt="008">
          <div class="content my-4">
            <p>6649010021</p>
            <p>นาย อิทธิพนธ์ สารสุ</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 mb-3  px-2">
        <div class="box-members">
          <img src="asset/img/members/022.png" alt="008">
          <div class="content my-4">
            <p>6649010022</p>
            <p>นาย พีลพล วิชัยคำ</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <footer>
    <div class="w-100 d-flex justify-content-between py-3 px-4 align-items-center">
      <div>
        <p class="mb-0 text-white fw-bold"> It66.iot-cm.com/it66g6</p>
      </div>
      <div>
        <span class="mx-2 mb-0 text-white"> <a href="https://github.com/patiphon-junior01/mini_project_66-2"
            class="text-white fs-4 mb-0" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        </span>
        <span class="mx-2 mb-0 text-white"> <a href="mailto:patiphonwongsee01@gmail.com" class="text-white fs-4 mb-0"
            target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a> </span>
      </div>
    </div>
  </footer>

  <script src="asset/framwork/jquery.js"></script>
  <script src="asset/framwork/jquery.min.js"></script>
  <script src="asset/framwork/chart.js"></script>
  <script src="asset/framwork/bootstrap.bundle.js"></script>
  <script src="asset/framwork/bootstrap.bundle.min.js"></script>

</body>

</html>