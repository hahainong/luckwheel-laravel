@extends('Core::layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ cxl_asset('assets/css/hc-canvas-luckwheel.css') }}">
@endsection
@section('bodyclass', 'luckwheel')
@section('content')
    <div class="wrapper typo" id="wrapper">
        <section id="luckywheel" class="hc-luckywheel">
            <div class="hc-luckywheel-container">
                <canvas class="hc-luckywheel-canvas" width="350px" height="350px">
                    Vòng Xoay May Mắn
                </canvas>
            </div>
            <a class="hc-luckywheel-btn" href="javascript:;">Xoay</a>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ cxl_asset('assets/js/hc-canvas-luckwheel.js') }}"></script>
    <script src="{{ cxl_asset('assets/js/sweetalert2.js') }}"></script>
    <script type="text/javascript">
        var isPercentage = true;
        var prizes = [{
                text: "500k",
                number: 999,
                percentpage: 0.001 // 0.1%
            },
            {
                text: "200k",
                number: 999,
                percentpage: 0.05 // 5%
            },
            {
                text: "100k",
                number: 999,
                percentpage: 0.1 // 10%
            },
            {
                text: "50k",
                number: 999,
                percentpage: 0.15 // 15%
            },
            {
                text: "20k",
                number: 999,
                percentpage: 0.2 // 20%
            },
            {
                text: "10k",
                number: 999,
                percentpage: 0.3 // 30%
            },
        ];
        document.addEventListener(
            "DOMContentLoaded",
            function() {
                hcLuckywheel.init({
                    id: "luckywheel",
                    config: function(callback) {
                        callback &&
                            callback(prizes);
                    },
                    mode: "both",
                    getPrize: function(callback) {
                        var rand = randomIndex(prizes);
                        var chances = rand;
                        callback && callback([rand, chances]);
                    },
                    gotBack: function(data) {
                        Swal.fire(
                            'Đã trúng giải',
                            data,
                            'success',
                        ).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: '<strong>Thông tin cá nhân</strong>',
                                    icon: 'info',
                                    html: `
                                      <div class="form-group">
                                        <input type="text" name="receiver_name" class="form-control" placeholder="Hãy nhập tên bạn nàoooo" required>
                                      </div>
                                      <div class="form-group">
                                        <input type="number" name="bank_number" class="form-control" placeholder="Hãy nhập stk bạn nàoooo" required>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" name="bank_name" class="form-control" placeholder="Hãy nhập tên ngân hàng nhaaa" required>
                                      </div>
                                    `,
                                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                      let receiver_name = $('input[name=receiver_name]').val();
                                      let bank_number = $('input[name=bank_number]').val();
                                      let bank_name = $('input[name=bank_name]').val();
                                      
                                        $.ajax({
                                            url: "{{ route('client.user.reward') }}",
                                            method: "POST",
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                                            },
                                            data: {
                                                reward: data,
                                                receiver_name: receiver_name,
                                                bank_name: bank_name,
                                                bank_number: bank_number,
                                                token: "{{ request()->token }}"
                                            },
                                            success: function(data) {
                                                if (data) alert("Chờ chút chuyển khoản nhaaaa!")
                                            },
                                            error: function() {
                                                alert("Something wrong please try again!");
                                            }
                                        })
                                    }
                                });
                            }
                        });
                    }
                });
            },
            false
        );

        function randomIndex(prizes) {
            if (isPercentage) {
                var counter = 1;
                for (let i = 0; i < prizes.length; i++) {
                    if (prizes[i].number == 0) {
                        counter++
                    }
                }
                if (counter == prizes.length) {
                    return null
                }
                let rand = Math.random();
                let prizeIndex = null;
                switch (true) {
                    case rand < prizes[5].percentpage:
                        prizeIndex = 5;
                        break;
                    case rand < prizes[5].percentpage + prizes[4].percentpage:
                        prizeIndex = 4;
                        break;
                    case rand < prizes[5].percentpage + prizes[4].percentpage + prizes[3].percentpage:
                        prizeIndex = 3;
                        break;
                    case rand < prizes[5].percentpage + prizes[4].percentpage + prizes[3].percentpage + prizes[2]
                    .percentpage:
                        prizeIndex = 2;
                        break;
                    case rand < prizes[5].percentpage + prizes[4].percentpage + prizes[3].percentpage + prizes[2].percentpage + prizes[1]
                    .percentpage:
                        prizeIndex = 1;
                        break;
                    case prizes[5].percentpage + prizes[4].percentpage + prizes[3].percentpage + prizes[2].percentpage + prizes[1]
                    .percentpage + prizes[0].percentpage:
                        prizeIndex = 0;
                        break;
                    default: 
                        prizeIndex = 0;
                }
                if (prizes[prizeIndex].number != 0) {
                    prizes[prizeIndex].number = prizes[prizeIndex].number - 1

                    return prizeIndex
                } else {
                    return randomIndex(prizes)
                }
            } else {
                var counter = 0;
                for (let i = 0; i < prizes.length; i++) {
                    if (prizes[i].number == 0) {
                        counter++
                    }
                }
                if (counter == prizes.length) {
                    return null
                }
                var rand = (Math.random() * (prizes.length)) >>> 0;
                if (prizes[rand].number != 0) {
                    prizes[rand].number = prizes[rand].number - 1
                    return rand
                } else {
                    return randomIndex(prizes)
                }
            }
        }
    </script>
@endsection
