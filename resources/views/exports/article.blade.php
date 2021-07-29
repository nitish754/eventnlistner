<table>
    <thead>
    <tr>
        <th>sr no </th>
        <th>date</th>
        <th>uic</th>
        <th>Location</th>
        <th>state/province</th>
        <th>country</th>
        <th>Project Name</th>
        <th>Firm</th>
        <th>email</th>
        <th>Photography</th>
        <th>Type</th>
        <th>Year of completition</th>
        <th>Status</th>
        <th>Payment Status</th>
        <th>Publication Link</th>
        <th>Payment Method</th>
        <th>Author/ contact Name</th>
        <th>instagram link</th>
        <th>FB link</th>
        <th>Linkedin link</th>
        <th>Twitter Link</th>
        <th>Reference</th>
        <th>SEO Status</th>
        <th>Invoice status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $i=>$item)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ date("d-m-Y",strtotime($item->date)) }}</td>
            <td>{{ "VZMAG".$item->uic }}</td>
            <td>{{ $item->location }}</td>
            <td></td>
            <td></td>
            <td>{{ $item->project_name }}</td>
            <td>{{ $item->firm_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->photographer }}</td>
            <td>{{ $item->project_type }}</td>
            <td></td>
            <td>{{ $item->status }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->instagram }}</td>
            <td>{{ $item->facebook }}</td>
            <td>{{ $item->linkendin }}</td>
            <td>{{ $item->twitter }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>