<?php
/* Session checks here */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay đổi trạng thái máy in - SPSO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/SPSO.css">
    <style>
        .printer-state-form {
            position: relative;
            width: 816px;
            height: 736px;
            left: calc(50% - 816px/2);
            top: 232px;
            background: #FFFFFF;
            border: 1px solid #000000;
            box-shadow: 0px 4px 50px 5px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            padding: 40px;
            margin-bottom: 400px; /* Increase margin to prevent footer overlap */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .printer-image {
            width: 417px;
            height: 291px;
            margin: 37px auto;
        }

        .printer-select {
            width: 696px;
            margin: 40px auto;
            display: flex;
            align-items: center;
        }

        .printer-select label {
            width: 130.66px;
            font-family: 'Inter';
            font-weight: 400;
            font-size: 21.98px;
            color: #000000;
        }

        .printer-select select {
            width: 540px;
            height: 55px;
            margin-left: 25px;
            background: #FFFFFF;
            border: 1px solid #D9D9D9;
            border-radius: 10px;
            padding: 0 20px;
            font-size: 21.98px;
        }

        .printer-status {
            width: 696px;
            margin: 40px auto;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .status-label {
            font-family: 'Inter';
            font-style: italic;
            font-weight: 400;
            font-size: 21.98px;
            color: #000000;
        }

        .status-value {
            font-family: 'Inter';
            font-style: italic;
            font-weight: 400;
            font-size: 21.98px;
            margin-left: 50px;
        }

        .status-active {
            color: #56F000;
        }

        .status-inactive {
            color: #FF3838;
        }

        .state-btn {
            width: 696px;
            height: 92px;
            margin: 126px auto 0;
            border-radius: 50px;
            border: none;
            font-family: 'Inter';
            font-weight: 700;
            font-size: 36px;
            color: #FFFFFF;
            cursor: pointer;
        }

        .btn-disable {
            background: #FF3838;
        }

        .btn-enable {
            background: #56F000;
        }

        .decoration {
            position: fixed;
            width: 320px;
            height: 320px;
            background: #0F6CBF;
            border-radius: 50%;
            z-index: -1;
        }

        .decoration-top {
            right: -160px;
            top: 185px;
        }

        .decoration-bottom {
            left: -160px;
            top: 648px;
        }
        
        body {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: #FFFFFF;
            overflow-x: hidden;
            padding-top: 100px;
            display: flex;
            flex-direction: column;
            min-height: calc(100vh + 600px); /* Increase minimum height to accommodate content */
        }
        .footer {
            position: relative;
            width: 100%;
            margin-top: auto;
            background: #000000;
            min-height: 456px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="decoration decoration-top"></div>
    <div class="decoration decoration-bottom"></div>

    <button onclick="window.location.href='printer_info.php'" class="back-to-home">
        <span>←</span>
        <span>Back</span>
    </button>

    <div class="printer-state-form">
        <img src="../../assets/2396.jpg" alt="Printer" class="printer-image">
        
        <div class="printer-select">
            <label>Chọn máy in:</label>
            <select id="printerSelect">
                <option>Máy in tòa nhà A1-302</option>
            </select>
        </div>

        <div class="printer-status">
            <span class="status-label">Trạng thái máy in hiện tại:</span>
            <span id="statusValue" class="status-value status-active">Hoạt động</span>
        </div>

        <button id="stateButton" class="state-btn btn-disable">Vô hiệu hóa</button>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        const statusValue = document.getElementById('statusValue');
        const stateButton = document.getElementById('stateButton');
        let isActive = true;

        stateButton.addEventListener('click', function() {
            isActive = !isActive;
            if (isActive) {
                statusValue.textContent = 'Hoạt động';
                statusValue.className = 'status-value status-active';
                stateButton.textContent = 'Vô hiệu hóa';
                stateButton.className = 'state-btn btn-disable';
            } else {
                statusValue.textContent = 'Tạm dừng';
                statusValue.className = 'status-value status-inactive';
                stateButton.textContent = 'Kích hoạt';
                stateButton.className = 'state-btn btn-enable';
            }
        });
    </script>
</body>
</html>