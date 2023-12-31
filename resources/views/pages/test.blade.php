<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Menu Example</title>
    <style>
        /* CSS chỉ để minh họa */
        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
        }

        .active-menu {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<ul class="menu-list">
    <li class="menu-item"><a href="/page1" class="active-menu">Page 1</a></li>
    <li class="menu-item"><a href="/page2">Page 2</a></li>
    <li class="menu-item"><a href="/page3">Page 3</a></li>
</ul>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Xác định đường dẫn hiện tại
        var currentPath = window.location.pathname;

        // Tìm mục menu có đường dẫn tương ứng và thêm class 'active-menu'
        $('.menu-item a').each(function () {
            var menuItemPath = $(this).attr('href');

            // So sánh đường dẫn hiện tại với đường dẫn của mục menu
            if (currentPath === menuItemPath) {
                $(this).parent().addClass('active-menu');
            }
        });

        // Nếu không có mục menu nào được đánh dấu active, thì mặc định chọn Page 1
        if ($('.menu-item a.active-menu').length === 0) {
            $('.menu-item:first-child a').addClass('active-menu');
        }

        // Xử lý sự kiện click cho mọi mục menu
        $('.menu-item a').on('click', function (e) {
            e.preventDefault();

            // Loại bỏ class 'active-menu' từ tất cả các mục menu
            $('.menu-item a').removeClass('active-menu');

            // Thêm class 'active-menu' cho mục menu được click
            $(this).addClass('active-menu');
        });
    });
</script>

</body>
</html>
