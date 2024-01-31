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
      <a href="#header" class="a-none">ข้อมูลอุณหภูมิเเละความชื้นในอากาศหรือในอาคาร</a>
    </h1>
    <ul class="d-flex gap-5 align-item-center">
      <li><a href="/it66g6/Web/"><i class="fas fa-home"></i> หน้าเเรก</a></li>
      <li><a href="#อุณหภูมิเเละความชื้น"><i class="fas fa-temperature-low"></i> อุณหภูมิเเละความชื้น</a></li>
      <li><a href="#กราฟข้อมูลอุณหภูมิ"><i class="fas fa-chart-line"></i> กราฟข้อมูลอุณหภูมิ</a></li>
      <li><a href="#กราฟข้อมูลความชื้น"><i class="far fa-chart-bar"></i> กราฟข้อมูลความชื้น</a></li>
    </ul>
  </div>

  <div id="อุณหภูมิเเละความชื้น" class="mb-5 top-slider"></div>
  <div class="content-temp-humi-now">
    <h2 class="border-bottom pb-2 fw-bold">อุณหภูมิเเละความชื้น ณ ปัจจุบัน</h2>
    <div class="main-content">
      <div>
        <div class="number-data">
          <h4><span id="temp-now" class="animation-change-class1">60</span> <span>%</span></h4>
        </div>
        <div class="footer-data">
          <h4><i class="fas fa-tint text-primary"></i> ความชื้นในอากาศ</h4>
        </div>
      </div>
      <div>
        <div class="number-data">
          <h4><span id="humi-now" class="animation-change-class2">28</span> <span>C</span></h4>
        </div>
        <div class="footer-data">
          <h4><i class="fas fa-thermometer-full text-danger"></i> อุณหภูมิ</h4>
        </div>
      </div>
    </div>
  </div>


  <!-- กราฟข้อมูลอุณหภูมิ  -->
  <div id="กราฟข้อมูลอุณหภูมิ" class="mb-5 top-slider"></div>
  <div class="content-temp-humi-now2 ">
    <div class="content-header">
      <h4 class=" pb-2 fw-bold"><i class="fas fa-chart-line" style="color:#ff8f00"></i> กราฟข้อมูลอุณหภูมิ</h4>
    </div>
    <div class="content-body">
      <canvas id="myChart" width="300" height="100"></canvas>
    </div>
  </div>


  <!-- กราฟข้อมูลความชื้น -->
  <div id="กราฟข้อมูลความชื้น" class="mb-5 top-slider"></div>
  <div class="content-temp-humi-now2 mb-5">
    <div class="content-header">
      <h4 class=" pb-2 fw-bold"><i class="fas fa-project-diagram" style="color:#4e6cef"></i> กราฟข้อมูลความชื้น</h4>
    </div>
    <div class="content-body">
      <canvas id="myChart_humi" width="400" height="100"></canvas>
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

  <!--end content -->

  <script src="asset/framwork/jquery.js"></script>
  <script src="asset/framwork/jquery.min.js"></script>
  <script src="asset/framwork/chart.js"></script>
  <script src="asset/framwork/bootstrap.bundle.js"></script>
  <script src="asset/framwork/bootstrap.bundle.min.js"></script>

  <script>
  // set data
  let chartData1 = [];
  let chartData2 = [];
  let labelsdata = [];
  let num = 1;
  const humi_now = document.getElementById('humi-now');
  const temp_now = document.getElementById('temp-now');
  const class_active1 = document.querySelector('.animation-change-class1');
  const class_active2 = document.querySelector('.animation-change-class2');

  const fetchdata = async () => {
    const data = await fetch(
      'api/insert/realtime_data_fetch.php?get_detail=1&token=dknfdnjfngbjkfgnbjfngbjknfgbjnjkdnbnfgbnfgbkj', {
        method: 'GET'
      })

    const res = await data.json();
    // console.log(res.data_all);
    const jsonData = res.data_all;
    // console.log(jsonData);


    if (humi_now.innerText != res.tmp_now.humi) {
      class_active2.classList.toggle("active");
      humi_now.innerText = res.tmp_now.humi;
      setTimeout(() => {
        class_active2.classList.toggle("active");
      }, 300)
    }

    if (temp_now.innerText != res.tmp_now.temp) {
      class_active1.classList.toggle("active");
      temp_now.innerText = res.tmp_now.temp;
      setTimeout(() => {
        class_active1.classList.toggle("active");
      }, 300)
    }

    chartData1 = [];
    chartData2 = [];
    labelsdata = [];
    let dataLength = jsonData.length;
    for (let i = dataLength - 1; i >= 0; i--) {
      chartData1.push(parseFloat(jsonData[i].temp));
      chartData2.push(parseFloat(jsonData[i].humi));
      labelsdata.push(jsonData[i].created_date);
    }
    await setchat_again();

    num += 1;
  }

  fetchdata();
  setInterval(fetchdata, 1000);


  let ctx_chat = null;
  let ctx_humi_chat = null;

  function setchat_again() {
    const ctx = document.getElementById('myChart').getContext('2d');
    const ctx_humi = document.getElementById('myChart_humi').getContext('2d');

    if (!ctx_chat) {
      // If the chart does not exist, create it
      ctx_chat = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labelsdata,
          datasets: [{
            label: 'กราฟข้อมูลอุณหภูมิ',
            data: chartData1,
            backgroundColor: '#ffe082',
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    } else {
      // If the chart already exists, update its data
      ctx_chat.data.labels = labelsdata;
      ctx_chat.data.datasets[0].data = chartData1;
      ctx_chat.update();
    }

    if (!ctx_humi_chat) {
      // If the chart does not exist, create it
      ctx_humi_chat = new Chart(ctx_humi, {
        type: 'bar',
        data: {
          labels: labelsdata,
          datasets: [{
            label: 'กราฟข้อมูลความชื้น',
            data: chartData2,
            backgroundColor: '#039be5',
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    } else {
      // If the chart already exists, update its data
      ctx_humi_chat.data.labels = labelsdata;
      ctx_humi_chat.data.datasets[0].data = chartData2;
      ctx_humi_chat.update();
    }
  }
  </script>

</body>

</html>