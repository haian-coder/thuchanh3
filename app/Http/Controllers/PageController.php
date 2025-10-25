<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $drinks = [
        ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55000',
         'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',
         'image' => 'images/latte.jpg'],
        ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45000',
         'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.',
         'image' => 'images/americano.jpg'],
        ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60000',
         'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.',
         'image' => 'images/coldbrew.jpg'],
        ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' => '58000',
         'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.',
         'image' => 'images/macchiato.jpg'],
    ];

    private $beans = [
        ['id' => 1, 'name' => 'Hạt Sao Chổi (Ethiopia)',
         'origin' => 'Yirgacheffe, Ethiopia',
         'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.',
         'image' => 'images/ethiopia.jpg'],
        ['id' => 2, 'name' => 'Hạt Thiên Thạch (Colombia)',
         'origin' => 'Huila, Colombia',
         'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.',
         'image' => 'images/colombia.jpg'],
    ];

    public function home()
    {
        $featuredDrinks = array_slice($this->drinks, 0, 3);
        return view('pages.home', ['featuredDrinks' => $featuredDrinks]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menu()
    {
        return view('pages.menu', ['drinks' => $this->drinks]);
    }

    public function beansStory()
    {
        return view('pages.beans-story', ['beans' => $this->beans]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function showDrink($id)
    {
        // Tìm đồ uống theo ID
        $drink = collect($this->drinks)->firstWhere('id', (int)$id);
        
        if (!$drink) {
            abort(404);
        }
        $drink['ingredients'] = match($drink['id']) {
            1 => 'Espresso đậm đà, được pha chế từ những hạt cà phê chất lượng cao, kết hợp với sữa tươi nguyên chất, tạo nên một lớp bọt sữa mịn màng và dẻo. Cảm giác uống sẽ rất nhẹ nhàng, nhưng lại đầy đủ hương vị cà phê tinh tế. Đây là một sự kết hợp hoàn hảo của hương vị đậm đà và sự mượt mà của sữa tươi.',
            2 => 'Espresso đậm đà, nước nóng, tạo thành một thức uống đơn giản nhưng mạnh mẽ, có thể làm bạn tỉnh táo ngay lập tức. Sự kết hợp này mang đến hương vị cà phê mạnh mẽ, không có sự lấn át của các nguyên liệu khác, giúp bạn tận hưởng trọn vẹn sự tinh khiết của cà phê.',
            3 => 'Cold brew được chế biến từ cà phê rang mộc, kết hợp với nước lọc tinh khiết và đá lạnh. Quy trình ủ lạnh trong 24 giờ giúp giữ lại hương vị tươi mới của cà phê, tạo ra một thức uống thanh nhẹ, không đắng và cực kỳ dễ uống, hoàn hảo cho những ngày hè oi ả.',
            4 => 'Espresso kết hợp với sữa tươi nguyên chất, tạo nên một lớp bọt sữa mịn màng, cùng với caramel ngọt ngào. Sự kết hợp này mang lại một hương vị đắng nhẹ, ngọt dịu từ caramel, tạo nên một thức uống đầy lôi cuốn và dễ dàng thưởng thức.',
            default => 'Đang cập nhật'
};


        $drink['taste_notes'] = match($drink['id']) {
            1 => 'Hương vị ngọt nhẹ của sữa hòa quyện cùng sự béo ngậy, tạo nên một cảm giác mượt mà, dịu êm ngay từ ngụm đầu tiên. Sau khi nuốt, bạn sẽ cảm nhận được hậu vị cà phê tinh tế, đọng lại lâu dài và thanh thoát, làm bạn muốn uống thêm một ngụm nữa.',
            2 => 'Vị đắng đậm đà của Espresso, mang đến sự mạnh mẽ ngay khi bạn uống. Hương thơm mạnh mẽ, nồng nàn của cà phê sẽ lan tỏa trong khoang miệng, đem lại cảm giác tỉnh táo và sảng khoái. Đây là một thức uống lý tưởng cho những ai yêu thích vị cà phê thật đậm và mạnh.',
            3 => 'Một ly Cold Brew cực kỳ thanh nhẹ, không hề có sự đắng gắt, mà ngược lại, đem đến một hậu ngọt mượt mà, dễ chịu. Cà phê rang mộc giữ lại được hương vị tự nhiên nhất, cùng với nước lọc tinh khiết và đá lạnh giúp giữ nguyên độ tươi của cà phê, mang lại cảm giác sảng khoái và nhẹ nhàng.',
            4 => 'Sự kết hợp giữa Espresso đắng nhẹ và sữa tươi, mang đến một hương vị ngọt dịu, nhẹ nhàng. Khi bạn thưởng thức, bạn sẽ cảm nhận được sự mượt mà của sữa, kết hợp với hương caramel ngọt ngào, tạo ra một thức uống đậm đà nhưng lại dễ uống, phù hợp cho những ai yêu thích hương vị ngọt dịu.',
            default => 'Đang cập nhật'
};


        return view('pages.drink-detail', compact('drink'));
    }
}
