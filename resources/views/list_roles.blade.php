<!DOCTYPE html>
<html>
<head>
    <title>HTML Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            align:center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 60px;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
        th {
            background-color: tomato;
        }
    </style>
</head>
<body>

    <table>
    <button type="button">
                    <a href="/create_role_index">
                        Create new</a><button>
    <button type="button">
                    <a href="/get_role_list/Status/NA/Active">
                        List Active Role</a><button>
    <button type="button">
                    <a href="/get_role_list/Status/NA/Inactive">
                        List Inactive Role</a><button>
    <button type="button">
                    <a href="/get_role_list/All/NA/All">
                        List All Role</a><button>
        <tr>
            <th>Sl no</th>
            <th>Role name</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        <tbody>
        @foreach ($response_data as $i=> $data)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <button type="button">
                    <a href="/edit_role/{{$data->id}}">
                        Edit</a><button>

                <button type="button">
                    <a href="/delete_role/{{$data->id}}">
                        Delete</a><button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
