<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการการขาย</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .summary {
            margin-top: 20px;
        }
        .chart {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header class="mb-4">
        <h1 class="text-center">ระบบจัดการการขาย</h1>
        <nav class="nav justify-content-center">
            <a class="nav-link" href="#">หน้าแรก</a>
            <a class="nav-link" href="#">รายงาน</a>
            <a class="nav-link" href="#">จัดการสินค้า</a>
            <a class="nav-link" href="#">จัดการลูกค้า</a>
            <a class="nav-link" href="#">ออกจากระบบ</a>
        </nav>
    </header>

    <div class="container">
        <!-- ฟิลเตอร์การค้นหา -->
        <div class="row mb-4">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="ค้นหาสินค้า">
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option>เลือกช่องทางการขาย</option>
                    <option>ไลน์</option>
                    <option>เฟสบุค</option>
                    <option>TikTok</option>
                    <option>โทรเข้า</option>
                    <option>หน้าเซลเพจ</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary">ค้นหา</button>

        <!-- ตารางข้อมูลการขาย -->
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>รายการสินค้า</th>
                    <th>ข้อมูลลูกค้า</th>
                    <th>ช่องทางการขาย</th>
                    <th>พนักงานโฆษณา</th>
                    <th>ค่าใช้จ่าย (บาท)</th>
                    <th>วันที่บันทึก</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ชื่อสินค้า 1</td>
                    <td>ชื่อลูกค้า 1</td>
                    <td>เฟสบุคเพจที่ 1</td>
                    <td>พนักงาน A</td>
                    <td>1000</td>
                    <td>2024-10-01</td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า 2</td>
                    <td>ชื่อลูกค้า 2</td>
                    <td>เฟสบุคเพจที่ 2</td>
                    <td>พนักงาน B</td>
                    <td>500</td>
                    <td>2024-10-01</td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า 3</td>
                    <td>ชื่อลูกค้า 3</td>
                    <td>TikTok</td>
                    <td>พนักงาน A</td>
                    <td>700</td>
                    <td>2024-10-02</td>
                </tr>
                <!-- แสดงข้อมูลเพิ่มเติม -->
            </tbody>
        </table>
        <button class="btn btn-secondary">โหลดเพิ่มเติม</button>

        <!-- สรุปข้อมูล -->
        <div class="summary">
            <h4>สรุปข้อมูล</h4>
            <p>ยอดขายรวม: <strong>2000</strong> บาท</p>
            <p>ค่าใช้จ่ายรวม: <strong>1200</strong> บาท</p>
            <p>กำไรสุทธิ: <strong>800</strong> บาท</p>
        </div>

        <!-- กราฟการขาย -->
        <div class="chart">
            <h4>กราฟการขายตามช่องทาง</h4>
            <div class="alert alert-warning">กราฟจะถูกแสดงที่นี่</div>
        </div>

        <!-- ปุ่มการดำเนินการ -->
        <div class="mt-4">
            <button class="btn btn-success">ส่งออกเป็น PDF</button>
            <button class="btn btn-info">ส่งออกเป็น Excel</button>
        </div>
    </div>

    <footer class="mt-5">
        <div class="text-center">
            <p>ข้อมูลติดต่อ: [หมายเลขโทรศัพท์] [อีเมล]</p>
            <p>ลิขสิทธิ์ © ปี 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
