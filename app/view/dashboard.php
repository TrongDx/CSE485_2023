<?php
    session_start();

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['Student'])) {
        header("location:../view/login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/style-login.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      text-align: center;
      padding: 10px;
      border: 1px solid #ccc;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    td {
      height: 80px;
    }
    
    .today {
      background-color: #b3d7ff;
    }
  </style>
</head>
<body>
    <header>
        <?php
            include './header.php';
        ?>
    </header>
  <div class="container">
    <h2 class="mt-4 text-center ">Sinh viên điểm danh</h2>
    <div class="month-selector">
      <label for="month">Chọn tháng:</label>
      <select class="border border-3 btn btn-light" id="month" onchange="showCalendar()" >
        <option value="0">Tháng 1</option>
        <option value="1">Tháng 2</option>
        <option value="2">Tháng 3</option>
        <option value="3">Tháng 4</option>
        <option value="4">Tháng 5</option>
        <option value="5">Tháng 6</option>
        <option value="6">Tháng 7</option>
        <option value="7">Tháng 8</option>
        <option value="8">Tháng 9</option>
        <option value="9">Tháng 10</option>
        <option value="10">Tháng 11</option>
        <option value="11">Tháng 12</option>
      </select>
      <label for="year">Chọn năm:</label>
      <input class="border border-3 btn btn-light" type="number" id="year" min="1900" max="2100" value="2023" onchange="showCalendar()">
    </div>
    <table>
      <thead>
        <tr>
          <th colspan="7" id="year"></th>
        </tr>
        <tr>
          <th>Thứ Hai</th>
          <th>Thứ Ba</th>
          <th>Thứ Tư</th>
          <th>Thứ Năm</th>
          <th>Thứ Sáu</th>
          <th>Thứ Bảy</th>
          <th>Chủ Nhật</th>
        </tr>
      </thead>
      <tbody id="calendar-body">
      </tbody>
    </table>
  </div>

  <script>
    // Lấy ngày hiện tại
    var today = new Date();
    var currentMonth = today.getMonth();
    var currentYear = today.getFullYear();

    // Tạo lịch cho tháng và năm đã cho
    function createCalendar(month, year) {
        var firstDay = new Date(year, month, 1);
        var lastDay = new Date(year, month + 1, 0);
        // Lấy element tbody để chèn các ô lịch vào
        var calendarBody = document.getElementById('calendar-body');

        // Xóa các ô lịch cũ trong tbody
        calendarBody.innerHTML = '';

        // Thiết lập tiêu đề cho lịch
        var yearTitle = document.getElementById('year');
        yearTitle.innerText = 'Tháng ' + (month + 1) + ' - ' + year;

        // Tạo ngày đầu tiên của tháng
        var date = new Date(firstDay);

        // Tính toán số ô trống đầu tiên
        var firstDayOfWeek = firstDay.getDay();
        var numEmptyCells = (firstDayOfWeek + 6) % 7;

        // Tạo các ô trống đầu tiên
        for (var i = 0; i < numEmptyCells; i++) {
            var emptyCell = document.createElement('td');
            calendarBody.appendChild(emptyCell);
        }

        // Tạo các ô lịch cho tháng
        while (date <= lastDay) {
            var cell = document.createElement('td');

            if (date.getMonth() === today.getMonth() && date.getDate() === today.getDate()) {
                cell.classList.add('today');
            }

            cell.innerText = date.getDate();
            // calendarBody.appendChild(cell);

            // if (date.getDay() === 0) {
            //     // Nếu là Chủ Nhật, tạo một hàng mới
            //     var row = document.createElement('tr');
            //     calendarBody.appendChild(row);
            // }

            // date.setDate(date.getDate() + 1);

            cell.addEventListener('click', function () {
    var statusElement = this.querySelector('.attendance-status');

    if (!statusElement) {
        statusElement = document.createElement('div');
        statusElement.classList.add('attendance-status');

        var presentRadioButton = document.createElement('input');
        presentRadioButton.type = 'radio';
        presentRadioButton.name = 'attendance';
        presentRadioButton.value = 'Present';
        presentRadioButton.id = 'radio-present';

        var presentLabel = document.createElement('label');
        presentLabel.innerText = 'Present';
        presentLabel.setAttribute('for', 'radio-present');

        var lateRadioButton = document.createElement('input');
        lateRadioButton.type = 'radio';
        lateRadioButton.name = 'attendance';
        lateRadioButton.value = 'Late';
        lateRadioButton.id = 'radio-late';

        var lateLabel = document.createElement('label');
        lateLabel.innerText = 'Late';
        lateLabel.setAttribute('for', 'radio-late');

        var absentRadioButton = document.createElement('input');
        absentRadioButton.type = 'radio';
        absentRadioButton.name = 'attendance';
        absentRadioButton.value = 'Absent';
        absentRadioButton.id = 'radio-absent';

        var absentLabel = document.createElement('label');
        absentLabel.innerText = 'Absent';
        absentLabel.setAttribute('for', 'radio-absent');

        var submitButton = document.createElement('button');
        submitButton.innerText = 'Submit';
        submitButton.addEventListener('click', function() {
            var selectedRadioButton = statusElement.querySelector('input[name="attendance"]:checked');
            if (selectedRadioButton) {
                var attendanceStatus = selectedRadioButton.value;
                statusElement.innerText = attendanceStatus;
            }
        });

        statusElement.appendChild(presentRadioButton);
        statusElement.appendChild(presentLabel);
        statusElement.appendChild(lateRadioButton);
        statusElement.appendChild(lateLabel);
        statusElement.appendChild(document.createElement('br'));
        statusElement.appendChild(absentRadioButton);
        statusElement.appendChild(absentLabel);
        statusElement.appendChild(submitButton);

        this.appendChild(statusElement);
    }
});



            calendarBody.appendChild(cell);

            if (date.getDay() === 0) {
                // Nếu là Chủ Nhật, tạo một hàng mới
                var row = document.createElement('tr');
                calendarBody.appendChild(row);
            }

            date.setDate(date.getDate() + 1);
        
    
        }
    }

    // Chức năng được gọi khi người dùng chọn tháng mới
    function showCalendar() {
        var monthSelect = document.getElementById('month');
        var selectedMonth = parseInt(monthSelect.value);
        var selectedYear = parseInt(document.getElementById('year').value);

        createCalendar(selectedMonth, selectedYear);
    }

    // Hiển thị lịch ban đầu
    createCalendar(currentMonth, currentYear);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

