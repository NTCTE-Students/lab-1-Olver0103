<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Таблица умножения</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения</h1>
    <table>
        <?php include 'multiplication_table.php'; ?>
    </table>
</body>
</html>