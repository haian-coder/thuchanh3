@extends('layouts.app')

@section('content')
  <div>
    <h1>Câu chuyện của chúng tôi</h1>
    <p>Roastery Coffee bắt nguồn từ một hành trình nhỏ — một mẻ rang thử nghiệm trong xưởng của người sáng lập, nơi hạt cà phê được chăm chút từng bước bằng cả kiến thức và cảm hứng. Từ những buổi thử hương dài ngày, chúng tôi nhận ra rằng mỗi vùng đất, mỗi giống hạt đều kể một câu chuyện khác nhau qua vị chát, vị ngọt và mùi hương. Chính sự khác biệt đó đã thôi thúc chúng tôi tạo ra một không gian để chia sẻ những trải nghiệm ấy với cộng đồng.</p>

    <p>Mỗi lô hạt được lựa chọn kỹ lưỡng từ các mối quan hệ bền vững với nông dân — nơi chúng tôi hiểu được lịch sử của hạt, điều kiện canh tác và phương pháp chế biến. Quy trình rang của Roastery không theo một công thức duy nhất: chúng tôi lắng nghe hương thơm, quan sát màu sắc và điều chỉnh nhiệt độ để tôn vinh đặc trưng tự nhiên của từng lô. Đó là nghệ thuật được hỗ trợ bởi khoa học, nhằm mang đến tách cà phê trung thực và đầy cảm xúc.</p>

    <p>Không gian quán được thiết kế như một nơi dừng chân chậm rãi: ánh sáng ấm áp, nội thất gỗ mộc mạc và những góc nhỏ dành cho câu chuyện giữa bạn bè hay khoảnh khắc yên tĩnh cùng quyển sách. Đội ngũ của chúng tôi tin rằng cà phê ngon luôn đi kèm với trải nghiệm — sự tử tế trong phục vụ, sự tỉ mỉ trong cách pha và sự chào đón ấm áp cho mọi người đến với Roastery.</p>

    <p>Chúng tôi không ngừng học hỏi và chia sẻ: từ buổi thử hương, workshop rang xay đến những chương trình hợp tác với cộng đồng nông dân. Roastery Coffee là một hành trình — và chúng tôi mong được tiếp tục cùng bạn viết thêm những trang mới trong câu chuyện ấy, một tách cà phê mỗi lần.</p>
  </div>
    
@endsection

<style>

main > div {
  max-width: 920px;
  margin: 0 auto;
  padding: 48px 20px 72px;
  font-family: 'Poppins', Arial, sans-serif;
  color: #222;
  line-height: 1.75;
}


main > div > h1 {
  font-size: clamp(28px, 4vw, 40px);
  margin: 0 0 16px;
  font-weight: 700;
  letter-spacing: 0.2px;
  color: #111;
  position: relative;
}

main > div > h1::after {
  content: "";
  display: block;
  width: 72px;
  height: 4px;
  background: #c0a060;
  border-radius: 999px;
  margin-top: 10px;
}


main > div > p {
  background: #ffffff;
  padding: 22px 24px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  margin: 0;
  font-size: 16px;
  color: #333;
  text-align: justify;
  text-justify: inter-word;
}

main > div > p + p {
  margin-top: 18px;
}

@media (max-width: 768px) {
  main > div {
    padding: 28px 16px 56px;
  }
  main > div > p {
    padding: 18px 16px;
    font-size: 15.5px;
  }
}

</style>