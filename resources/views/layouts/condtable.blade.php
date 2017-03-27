<table class="table cond-table">
    <tbody class="letter-brown">
        <tr>
            <th>エリア</th>
            <td>
                    <?php if (is_array($d_area)): ?>
                        {{implode($d_area, ' / ')}}
                    <?php else :?>
                        {{$d_area}}
                    <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>条件</th>
            <td>
                @if (is_array($cond))
                    {{implode($cond, ' / ')}}
                @else
                    {{$cond}}
                @endif
            </td>
        </tr>
        <tr>
            <th>価格帯</th>
            <td>
                @if (empty($_COOKIE['refineprice']))
                    {{'未設定'}}
                @else
                    {{number_format($_COOKIE['lowerPrice']).'円 ~ '.number_format($_COOKIE['upperPrice']).'円' }}
                @endif
            </td>
        </tr>
    </tbody>
</table>
<div class="divider" style="margin-top:0"></div>
