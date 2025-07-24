<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DataTables</title>
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        />
    </head>
    <body>
        <div class="container mt-5">
            <h2>User Data</h2>
            <table id="userTable" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
        <script>
            $(function () {
                $("#userTable").DataTable({
                    processing: true,
                    serverSide: true,
                    lengthMenu: [3, 5, 10],
                    ajax: "/users/data",
                    columns: [
                        {
                            data: null,
                            render: (data, type, row, meta) =>
                                meta.row + meta.settings._iDisplayStart + 1,
                        },
                        { data: "name" },
                        { data: "email" },
                    ],
                });
            });
        </script>
    </body>
</html>
