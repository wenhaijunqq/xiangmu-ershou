<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\examining;
use App\Http\Model\appointment;

class WriteAssessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取数据
        $data = examining::where('car_id',$id)->first();

        return view('admin/examine/seeassess',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取数据加载页面
        $data = examining::where('car_id',$id)->first();
        // $arr = json_decode($data['burn_abnormal'],true);
        // $arr = json_decode($data['burn_abnormal'],true)['Firewall-cotton1'];
        // dd($arr);
        return view('admin/estimate/updateassess',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 获取数据把基础信息添加到数据库
        // 把数据添加的数据库
        $jg = $request->except(['_token','_method']);
        $data = array();
        $data['car_id'] = $id;
        //拆分数据转化成json格式
        // 基础参数
        $basic_parameter  = array("manufacturer"=>$jg['manufacturer'],"grade"=>$jg['grade'],"engine"=>$jg['engine'],"gearbox"=>$jg['gearbox'],"body-structure"=>$jg['body-structure'],"volume"=>$jg['volume'],"wheel-base"=>$jg['wheel-base'],"boot"=>$jg['boot'],"weight"=>$jg['weight']);
        $data['basic_parameter'] = json_encode($basic_parameter,JSON_UNESCAPED_UNICODE);

        // 发动机参数
        $engine_parameter = array("displacement"=>$jg['displacement'],"air-suction"=>$jg['air-suction'],"air-cylinder"=>$jg['air-cylinder'],"horsepower"=>$jg['horsepower'],"torque"=>$jg['torque'],"Fuel-type"=>$jg['Fuel-type'],"fuel-oil"=>$jg['fuel-oil'],"Oil-drive"=>$jg['Oil-drive'],"emission-standard"=>$jg['emission-standard']);
        $data['engine_parameter'] = json_encode($engine_parameter,JSON_UNESCAPED_UNICODE);

        //底盘及制动
        $underpan_braking = array("drive"=>$jg['drive'],"assistance"=>$jg['assistance'],"forward-mounting"=>$jg['forward-mounting'],"Rear-Suspension"=>$jg['Rear-Suspension'],"front-brake"=>$jg['front-brake'],"rear-brake"=>$jg['rear-brake'],"parking-braking"=>$jg['parking-braking'],"Front-Tyre"=>$jg['Front-Tyre'],"rear-tire"=>$jg['rear-tire']);
        $data['underpan_braking'] = json_encode($underpan_braking,JSON_UNESCAPED_UNICODE);

        //安全配置
        $safety_configuration = array("deputy-airbags"=>$jg['deputy-airbags'],"side-airbags"=>$jg['side-airbags'],"Head-Airbag"=>$jg['Head-Airbag'],"tire-pressure"=>$jg['tire-pressure'],"central-locking"=>$jg['central-locking'],"ISO-FIX-LATCH"=>$jg['ISO-FIX-LATCH'],"KEYLESS-GO"=>$jg['KEYLESS-GO'],"ABS"=>$jg['ABS'],"ESP"=>$jg['ESP']);
        $data['safety_configuration'] = json_encode($safety_configuration,JSON_UNESCAPED_UNICODE);

        //外部配置
        $exterior_configuration = array("power-sunroof"=>$jg['power-sunroof'],"panoramic-sunroof"=>$jg['panoramic-sunroof'],"Electric-suction-door"=>$jg['Electric-suction-door'],"Induction-trunk"=>$jg['Induction-trunk'],"Rain-sensing-Wipers"=>$jg['Rain-sensing-Wipers'],"rear-wiper"=>$jg['rear-wiper'],"AND-POWER-WINDOWS"=>$jg['AND-POWER-WINDOWS'],"power-mirror"=>$jg['power-mirror'],"warm-mirror"=>$jg['warm-mirror']);
        $data['exterior_configuration'] = json_encode($exterior_configuration,JSON_UNESCAPED_UNICODE);

        //内容配置
        $interior_configuration = array("MFL"=>$jg['MFL'],"cruise-control"=>$jg['cruise-control'],"air-conditioner"=>$jg['air-conditioner'],"automatic-air-conditioning"=>$jg['automatic-air-conditioning'],"GPS"=>$jg['GPS'],"car-backing-radar"=>$jg['car-backing-radar'],"Back-eye-camera"=>$jg['Back-eye-camera'],"leather-seat"=>$jg['leather-seat'],"seat-heating"=>$jg['seat-heating']);
        $data['interior_configuration'] = json_encode($interior_configuration,JSON_UNESCAPED_UNICODE);

        //获取检测数据

        //事故检测
        $accident = array("left-frame"=>$jg['left-frame'],"right-frame"=>$jg['right-frame'],"Left-front-lining"=>$jg['Left-front-lining'],"Right-front-lining"=>$jg['Right-front-lining'],"Left-damper-holder"=>$jg['Left-damper-holder'],"right-damper-holder"=>$jg['right-damper-holder'],"Left-longeron"=>$jg['Left-longeron'],"Right-longeron"=>$jg['Right-longeron'],"firewall"=>$jg['firewall'],"Right-A-column"=>$jg['Right-A-column'],"Right-B-column"=>$jg['Right-B-column'],"Right-side"=>$jg['Right-side'],"Right-C-column"=>$jg['Right-C-column'],"Right-D-column"=>$jg['Right-D-column'],"Right-edge"=>$jg['Right-edge'],"Right-floor"=>$jg['Right-floor'],"Rightrear-frame"=>$jg['Rightrear-frame'],"Right-lining"=>$jg['Right-lining'],"Leftrear-frame"=>$jg['Leftrear-frame'],"Left-lining"=>$jg['Left-lining'],"back-panel"=>$jg['back-panel'],"Trunk-board"=>$jg['Trunk-board'],"right-SPAR"=>$jg['right-SPAR'],"left-SPAR"=>$jg['left-SPAR'],"Left-D-column"=>$jg['Left-D-column'],"Left-C-column"=>$jg['Left-C-column'],"Left-side"=>$jg['Left-side'],"Left-B-column"=>$jg['Left-B-column'],"Left-A-column"=>$jg['Left-A-column'],"Left-edge"=>$jg['Left-edge'],"Left-floor"=>$jg['Left-floor']);
        $data['accident'] = json_encode($accident,JSON_UNESCAPED_UNICODE);

        //事件检测异常
        $accident_abnormal = array("left-frame1"=>$jg['left-frame1'],"right-frame1"=>$jg['right-frame1'],"Left-front-lining1"=>$jg['Left-front-lining1'],"Right-front-lining1"=>$jg['Right-front-lining1'],"Left-damper-holder1"=>$jg['Left-damper-holder1'],"right-damper-holder1"=>$jg['right-damper-holder1'],"Left-longeron1"=>$jg['Left-longeron1'],"Right-longeron1"=>$jg['Right-longeron1'],"firewall1"=>$jg['firewall1'],"Right-A-column1"=>$jg['Right-A-column1'],"Right-B-column1"=>$jg['Right-B-column1'],"Right-side1"=>$jg['Right-side1'],"Right-C-column1"=>$jg['Right-C-column1'],"Right-D-column1"=>$jg['Right-D-column1'],"Right-edge1"=>$jg['Right-edge1'],"Right-floor1"=>$jg['Right-floor1'],"Rightrear-frame1"=>$jg['Rightrear-frame1'],"Right-lining1"=>$jg['Right-lining1'],"Leftrear-frame1"=>$jg['Leftrear-frame1'],"Left-lining1"=>$jg['Left-lining1'],"back-panel1"=>$jg['back-panel1'],"Trunk-board1"=>$jg['Trunk-board1'],"right-SPAR1"=>$jg['right-SPAR1'],"left-SPAR1"=>$jg['left-SPAR1'],"Left-D-column1"=>$jg['Left-D-column1'],"Left-C-column1"=>$jg['Left-C-column1'],"Left-side1"=>$jg['Left-side1'],"Left-B-column1"=>$jg['Left-B-column1'],"Left-A-column1"=>$jg['Left-A-column1'],"Left-edge1"=>$jg['Left-edge1'],"Left-floor1"=>$jg['Left-floor1']);
        $accident_abnormal = array_filter($accident_abnormal);
        $data['accident_abnormal'] = json_encode($accident_abnormal,JSON_UNESCAPED_UNICODE);

        //泡水排查
        $soaking_water = array("Cabin-box"=>$jg['Cabin-box'],"Seat-screws"=>$jg['Seat-screws'],"Interior-harness"=>$jg['Interior-harness'],"Seat-bottom"=>$jg['Seat-bottom'],"The-cushion"=>$jg['The-cushion'],"Car-plastic"=>$jg['Car-plastic'],"Ashtray-base"=>$jg['Ashtray-base']);
        $data['soaking_water'] = json_encode($soaking_water,JSON_UNESCAPED_UNICODE);

        // 泡水排查异常
        $sw_abnormal = array("Cabin-box1"=>$jg['Cabin-box1'],"Seat-screws1"=>$jg['Seat-screws1'],"Interior-harness1"=>$jg['Interior-harness1'],"Seat-bottom1"=>$jg['Seat-bottom1'],"The-cushion1"=>$jg['The-cushion1'],"Car-plastic1"=>$jg['Car-plastic1'],"Ashtray-base1"=>$jg['Ashtray-base1']);
        $sw_abnormal = array_filter($sw_abnormal);
        $data['sw_abnormal'] = json_encode($sw_abnormal,JSON_UNESCAPED_UNICODE);

        //火烧排查
        $burn = array("Firewall-cotton"=>$jg['Firewall-cotton'],"Main-harness"=>$jg['Main-harness']);
        $data['burn'] = json_encode($burn,JSON_UNESCAPED_UNICODE);

        //火烧排查异常
        $burn_abnormal = array("Firewall-cotton1"=>$jg['Firewall-cotton1'],"Main-harness1"=>$jg['Main-harness1']);
        $burn_abnormal = array_filter($burn_abnormal);
        $data['burn_abnormal'] = json_encode($burn_abnormal,JSON_UNESCAPED_UNICODE);

        //机舱项检测
        $machinery_space = array("Engine-oil-pan"=>$jg['Engine-oil-pan'],"Antifreeze-level"=>$jg['Antifreeze-level'],"Transmission"=>$jg['Transmission'],"Engine_assembly"=>$jg['Engine_assembly'],"Brake-oil-pot"=>$jg['Brake-oil-pot'],"Booster-oil"=>$jg['Booster-oil'],"Water-tank-pipes"=>$jg['Water-tank-pipes'],"Water-tank"=>$jg['Water-tank'],"Engine-belt"=>$jg['Engine-belt'],"Engine-pad"=>$jg['Engine-pad'],"Oil-level"=>$jg['Oil-level'],"Battery"=>$jg['Battery'],"Power-pump"=>$jg['Power-pump'],"Condenser"=>$jg['Condenser'],"Transmission-pan"=>$jg['Transmission-pan']);
        $data['machinery_space'] = json_encode($machinery_space,JSON_UNESCAPED_UNICODE);

        //机舱项检测异常
        $ms_abnormal = array("Engine-oil-pan1"=>$jg['Engine-oil-pan1'],"Antifreeze-level1"=>$jg['Antifreeze-level1'],"Transmission1"=>$jg['Transmission1'],"Engine_assembly1"=>$jg['Engine_assembly1'],"Brake-oil-pot1"=>$jg['Brake-oil-pot1'],"Booster-oil1"=>$jg['Booster-oil1'],"Water-tank-pipes1"=>$jg['Water-tank-pipes1'],"Water-tank1"=>$jg['Water-tank1'],"Engine-belt1"=>$jg['Engine-belt1'],"Engine-pad1"=>$jg['Engine-pad1'],"Oil-level1"=>$jg['Oil-level1'],"Battery1"=>$jg['Battery1'],"Power-pump1"=>$jg['Power-pump1'],"Condenser1"=>$jg['Condenser1'],"Transmission-pan1"=>$jg['Transmission-pan1']);
        $ms_abnormal = array_filter($ms_abnormal);
        $data['ms_abnormal'] = json_encode($ms_abnormal,JSON_UNESCAPED_UNICODE);

        //底盘悬架项检测
        $underpan = array("Left-q-absorber"=>$jg['Left-q-absorber'],"Right-q-h-absorber"=>$jg['Right-q-h-absorber'],"Right-h-absorber"=>$jg['Right-h-absorber'],"Left-h-absorber"=>$jg['Left-h-absorber']);
        $data['underpan'] = json_encode($underpan,JSON_UNESCAPED_UNICODE);

        //底盘悬架项检测异常
        $underpan_abnormal = array("Left-q-absorber1"=>$jg['Left-q-absorber1'],"Right-q-h-absorber1"=>$jg['Right-q-h-absorber1'],"Right-h-absorber1"=>$jg['Right-h-absorber1'],"Left-h-absorber1"=>$jg['Left-h-absorber1']);
        $underpan_abnormal = array_filter($underpan_abnormal);
        $data['underpan_abnormal'] = json_encode($underpan_abnormal,JSON_UNESCAPED_UNICODE);

        //安全系统检测
        $secure = array("Driver-seat-airbag"=>$jg['Driver-seat-airbag'],"Co-pilot-airbag"=>$jg['Co-pilot-airbag'],"Front-side-airbags"=>$jg['Front-side-airbags'],"Rear-side-airbags"=>$jg['Rear-side-airbags'],"Front-head-airbags"=>$jg['Front-head-airbags'],"Rear-head-airbags"=>$jg['Rear-head-airbags'],"Tire-pressure-monitoring"=>$jg['Tire-pressure-monitoring'],"Central-locking"=>$jg['Central-locking'],"Child-seat"=>$jg['Child-seat'],"Keyless-start"=>$jg['Keyless-start'],"Keyless-entry"=>$jg['Keyless-entry'],"remote-key"=>$jg['remote-key'],"ABS_detection"=>$jg['ABS_detection'],"ESP_detection"=>$jg['ESP_detection'],"Electronic-parking-brake"=>$jg['Electronic-parking-brake']);
        $data['secure'] = json_encode($secure,JSON_UNESCAPED_UNICODE);

        //安全系统检测异常
        $secure_abnormal = array("Driver-seat-airbag1"=>$jg['Driver-seat-airbag1'],"Co-pilot-airbag1"=>$jg['Co-pilot-airbag1'],"Front-side-airbags1"=>$jg['Front-side-airbags1'],"Rear-side-airbags1"=>$jg['Rear-side-airbags1'],"Front-head-airbags1"=>$jg['Front-head-airbags1'],"Rear-head-airbags1"=>$jg['Rear-head-airbags1'],"Tire-pressure-monitoring1"=>$jg['Tire-pressure-monitoring1'],"Central-locking1"=>$jg['Central-locking1'],"Child-seat1"=>$jg['Child-seat1'],"Keyless-start1"=>$jg['Keyless-start1'],"Keyless-entry1"=>$jg['Keyless-entry1'],"remote-key1"=>$jg['remote-key1'],"ABS_detection1"=>$jg['ABS_detection1'],"ESP_detection1"=>$jg['ESP_detection1'],"Electronic-parking-brake1"=>$jg['Electronic-parking-brake1']);
        $secure_abnormal = array_filter($secure_abnormal);
        $data['secure_abnormal'] = json_encode($secure_abnormal,JSON_UNESCAPED_UNICODE);

        //外部配置检测
        $external = array("Left-h-front-hub"=>$jg['Left-h-front-hub'],"Left-front-tire"=>$jg['Left-front-tire'],"front-windshield"=>$jg['front-windshield'],"Right-q-front-hub"=>$jg['Right-q-front-hub'],"Right-front-tire"=>$jg['Right-front-tire'],"Right-front-hub"=>$jg['Right-front-hub'],"Right-rear-tire"=>$jg['Right-rear-tire'],"Rear-windshield"=>$jg['Rear-windshield'],"Right-rear-hub"=>$jg['Right-rear-hub'],"Left-rear-tire"=>$jg['Left-rear-tire'],"Panoramic-skylight"=>$jg['Panoramic-skylight'],"Induction-wipers"=>$jg['Induction-wipers'],"After-wipers"=>$jg['After-wipers'],"Front-window"=>$jg['Front-window'],"Rear-windows"=>$jg['Rear-windows'],"Rearview-mirror-adjustment"=>$jg['Rearview-mirror-adjustment'],"Rearview-mirror-fold"=>$jg['Rearview-mirror-fold'],"Rearview-heatingr"=>$jg['Rearview-heatingr'],"Electric-door"=>$jg['Electric-door'],"Rear-side-sunshade"=>$jg['Rear-side-sunshade'],"Induction"=>$jg['Induction'],"Electric-sunroof"=>$jg['Electric-sunroof']);
        $data['external'] = json_encode($external,JSON_UNESCAPED_UNICODE);

        //外部配置检测异常
        $external_abnormal = array("Left-h-front-hub1"=>$jg['Left-h-front-hub1'],"Left-front-tire1"=>$jg['Left-front-tire1'],"front-windshield1"=>$jg['front-windshield1'],"Right-q-front-hub1"=>$jg['Right-q-front-hub1'],"Right-front-tire1"=>$jg['Right-front-tire1'],"Right-front-hub1"=>$jg['Right-front-hub1'],"Right-rear-tire1"=>$jg['Right-rear-tire1'],"Rear-windshield1"=>$jg['Rear-windshield1'],"Right-rear-hub1"=>$jg['Right-rear-hub1'],"Left-rear-tire1"=>$jg['Left-rear-tire1'],"Panoramic-skylight1"=>$jg['Panoramic-skylight1'],"Induction-wipers1"=>$jg['Induction-wipers1'],"After-wipers1"=>$jg['After-wipers1'],"Front-window1"=>$jg['Front-window1'],"Rear-windows1"=>$jg['Rear-windows1'],"Rearview-mirror-adjustment1"=>$jg['Rearview-mirror-adjustment1'],"Rearview-mirror-fold1"=>$jg['Rearview-mirror-fold1'],"Rearview-heatingr1"=>$jg['Rearview-heatingr1'],"Electric-door1"=>$jg['Electric-door1'],"Rear-side-sunshade1"=>$jg['Rear-side-sunshade1'],"Induction1"=>$jg['Induction1'],"Electric-sunroof1"=>$jg['Electric-sunroof1']);
        $external_abnormal = array_filter($external_abnormal);
        $data['external_abnormal'] = json_encode($external_abnormal,JSON_UNESCAPED_UNICODE);

        //内部配置检测
        $inside = array("Leather-seat"=>$jg['Leather-seat'],"front-heated"=>$jg['front-heated'],"Seat-ventilation"=>$jg['Seat-ventilation'],"Driver-adjustment"=>$jg['Driver-adjustment'],"Multifunction-wheel"=>$jg['Multifunction-wheel'],"Cruise"=>$jg['Cruise'],"positioning-system"=>$jg['positioning-system'],"Reversing-radar"=>$jg['Reversing-radar'],"Reverse-image"=>$jg['Reverse-image'],"Manual-conditioning"=>$jg['Manual-conditioning'],"Automatic-conditioning"=>$jg['Automatic-conditioning'],"HUD-display"=>$jg['HUD-display'],"conditioning"=>$jg['conditioning'],"air_conditioner"=>$jg['air_conditioner']);
        $data['inside'] = json_encode($inside,JSON_UNESCAPED_UNICODE);

        //内部配置检测异常
        $inside_abnormal = array("Leather-seat1"=>$jg['Leather-seat1'],"front-heated1"=>$jg['front-heated1'],"Seat-ventilation1"=>$jg['Seat-ventilation1'],"Driver-adjustment1"=>$jg['Driver-adjustment1'],"Multifunction-wheel1"=>$jg['Multifunction-wheel1'],"Cruise1"=>$jg['Cruise1'],"positioning-system1"=>$jg['positioning-system1'],"Reversing-radar1"=>$jg['Reversing-radar1'],"Reverse-image1"=>$jg['Reverse-image1'],"Manual-conditioning1"=>$jg['Manual-conditioning1'],"Automatic-conditioning1"=>$jg['Automatic-conditioning1'],"HUD-display1"=>$jg['HUD-display1'],"conditioning1"=>$jg['conditioning1'],"air_conditioner1"=>$jg['air_conditioner1']);
        $inside_abnormal = array_filter($inside_abnormal);
        $data['inside_abnormal'] = json_encode($inside_abnormal,JSON_UNESCAPED_UNICODE);

        //灯光系统检测
        $lamplight = array("Low-lights"=>$jg['Low-lights'],"High-beam"=>$jg['High-beam'],"Front-turn-signal"=>$jg['Front-turn-signal'],"Fog-q-lightsr"=>$jg['Fog-q-lightsr'],"After-signal"=>$jg['After-signal'],"brake-light"=>$jg['brake-light'],"Reversing-lights"=>$jg['Reversing-lights'],"Fog-h-lights"=>$jg['Fog-h-lights'],"Indoor-light"=>$jg['Indoor-light'],"Xenon-headlights"=>$jg['Xenon-headlights'],"LED-headlights"=>$jg['LED-headlights'],"Automatic-headlights"=>$jg['Automatic-headlights'],"Fog-q-lights"=>$jg['Fog-q-lights'],"Headlight-adjustable"=>$jg['Headlight-adjustable'],"Headlight"=>$jg['Headlight']);
        $data['lamplight'] = json_encode($lamplight,JSON_UNESCAPED_UNICODE);

        //灯光系统检测异常
        $light_abnormal = array("Low-lights1"=>$jg['Low-lights1'],"High-beam1"=>$jg['High-beam1'],"Front-turn-signal1"=>$jg['Front-turn-signal1'],"Fog-q-lightsr1"=>$jg['Fog-q-lightsr1'],"After-signal1"=>$jg['After-signal1'],"brake-light1"=>$jg['brake-light1'],"Reversing-lights1"=>$jg['Reversing-lights1'],"Fog-h-lights1"=>$jg['Fog-h-lights1'],"Indoor-light1"=>$jg['Indoor-light1'],"Xenon-headlights1"=>$jg['Xenon-headlights1'],"LED-headlights1"=>$jg['LED-headlights1'],"Automatic-headlights1"=>$jg['Automatic-headlights1'],"Fog-q-lights1"=>$jg['Fog-q-lights1'],"Headlight-adjustable1"=>$jg['Headlight-adjustable1'],"Headlight1"=>$jg['Headlight1']);
        $light_abnormal = array_filter($light_abnormal);
        $data['light_abnormal'] = json_encode($light_abnormal,JSON_UNESCAPED_UNICODE);

        //高科技配置检测
        $high_tech = array("departure-warning"=>$jg['departure-warning'],"Automatic-parking"=>$jg['Automatic-parking'],"Blind-system"=>$jg['Blind-system'],"Panoramic-camera"=>$jg['Panoramic-camera'],"Engine-automatically"=>$jg['Engine-automatically']);
        $data['high_tech'] = json_encode($high_tech,JSON_UNESCAPED_UNICODE);

        //高科技配置检测异常
        $ht_abnormal = array("departure-warning1"=>$jg['departure-warning1'],"Automatic-parking1"=>$jg['Automatic-parking1'],"Blind-system1"=>$jg['Blind-system1'],"Panoramic-camera1"=>$jg['Panoramic-camera1'],"Engine-automatically1"=>$jg['Engine-automatically1']);
        $ht_abnormal = array_filter($ht_abnormal);
        $data['ht_abnormal'] = json_encode($ht_abnormal,JSON_UNESCAPED_UNICODE);

        //灯随车工具检测
        $car_instrument = array("jack"=>$jg['jack'],"Fire-extinguisher"=>$jg['Fire-extinguisher'],"warning-signs"=>$jg['warning-signs'],"Repair-kit"=>$jg['Repair-kit'],"Spare-tire"=>$jg['Spare-tire']);
        $data['car_instrument'] = json_encode($car_instrument,JSON_UNESCAPED_UNICODE);

        //灯随车工具检测异常
        $ci_abnormal = array("jack1"=>$jg['jack1'],"Fire-extinguisher1"=>$jg['Fire-extinguisher1'],"warning-signs1"=>$jg['warning-signs1'],"Repair-kit1"=>$jg['Repair-kit1'],"Spare-tire1"=>$jg['Spare-tire1']);
        $ci_abnormal = array_filter($ci_abnormal);
        $data['ci_abnormal'] = json_encode($ci_abnormal,JSON_UNESCAPED_UNICODE);

        //仪表台指示灯检测
        $instrument_desk = array("Tune-car"=>$jg['Tune-car'],"Brake-indicator"=>$jg['Brake-indicator'],"Airbag-light"=>$jg['Airbag-light'],"Body-light"=>$jg['Body-light'],"Engine-light"=>$jg['Engine-light'],"Transmission-light"=>$jg['Transmission-light']);
        $data['instrument_desk'] = json_encode($instrument_desk,JSON_UNESCAPED_UNICODE);

        //仪表台指示灯检测异常
        $id_abnormal = array("Tune-car1"=>$jg['Tune-car1'],"Brake-indicator1"=>$jg['Brake-indicator1'],"Airbag-light1"=>$jg['Airbag-light1'],"Body-light1"=>$jg['Body-light1'],"Engine-light1"=>$jg['Engine-light1'],"Transmission-light1"=>$jg['Transmission-light1']);
        $id_abnormal = array_filter($id_abnormal);
        $data['id_abnormal'] = json_encode($id_abnormal,JSON_UNESCAPED_UNICODE);

        //发动机状态检测
        $engine = array("start-up"=>$jg['start-up'],"Idle-speed"=>$jg['Idle-speed'],"Engine-shake"=>$jg['Engine-shake'],"exhaust"=>$jg['exhaust']);
        $data['engine'] = json_encode($engine,JSON_UNESCAPED_UNICODE);

        //发动机状态检测异常
        $engine_abnormal = array("start-up1"=>$jg['start-up1'],"Idle-speed1"=>$jg['Idle-speed1'],"Engine-shake1"=>$jg['Engine-shake1'],"exhaust1"=>$jg['exhaust1']);
        $engine_abnormal = array_filter($engine_abnormal);
        $data['engine_abnormal'] = json_encode($engine_abnormal,JSON_UNESCAPED_UNICODE);

        //变速箱及转向检测
        $gearbox = array("Gearbox-gear"=>$jg['Gearbox-gear'],"Turn"=>$jg['Turn']);
        $data['gearbox'] = json_encode($gearbox,JSON_UNESCAPED_UNICODE);

        //变速箱及转向检测异常
        $gearbox_abnormal = array("Gearbox-gear1"=>$jg['Gearbox-gear1'],"Turn1"=>$jg['Turn1']);
        $gearbox_abnormal = array_filter($gearbox_abnormal);
        $data['gearbox_abnormal'] = json_encode($gearbox_abnormal,JSON_UNESCAPED_UNICODE);
        $data = array_filter($data);

        //添加到数据库
        $res = examining::insert($data);
        // 查看数据库并且对添加状态字段进行修改
        $jieguo = appointment::where('car_id',$id)->update(['add_assess'=>1]);
        if($res){
             echo "<script>alert('添加成功！');location.href='/admin/estimate/wait'</script>";   
        }else{
            echo "<script>alert('添加失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
        }

    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function indexs($id)
    {
        //加载评估报告表
        return view('admin/estimate/writeassess',['id'=>$id]);
    }

    public function updates(Request $request, $id)
    {
        //执行修改
         $jg = $request->except(['_token']);
        $data = array();
        $data['car_id'] = $id;
        //拆分数据转化成json格式
        // 基础参数
        $basic_parameter  = array("manufacturer"=>$jg['manufacturer'],"grade"=>$jg['grade'],"engine"=>$jg['engine'],"gearbox"=>$jg['gearbox'],"body-structure"=>$jg['body-structure'],"volume"=>$jg['volume'],"wheel-base"=>$jg['wheel-base'],"boot"=>$jg['boot'],"weight"=>$jg['weight']);
        $data['basic_parameter'] = json_encode($basic_parameter,JSON_UNESCAPED_UNICODE);

        // 发动机参数
        $engine_parameter = array("displacement"=>$jg['displacement'],"air-suction"=>$jg['air-suction'],"air-cylinder"=>$jg['air-cylinder'],"horsepower"=>$jg['horsepower'],"torque"=>$jg['torque'],"Fuel-type"=>$jg['Fuel-type'],"fuel-oil"=>$jg['fuel-oil'],"Oil-drive"=>$jg['Oil-drive'],"emission-standard"=>$jg['emission-standard']);
        $data['engine_parameter'] = json_encode($engine_parameter,JSON_UNESCAPED_UNICODE);

        //底盘及制动
        $underpan_braking = array("drive"=>$jg['drive'],"assistance"=>$jg['assistance'],"forward-mounting"=>$jg['forward-mounting'],"Rear-Suspension"=>$jg['Rear-Suspension'],"front-brake"=>$jg['front-brake'],"rear-brake"=>$jg['rear-brake'],"parking-braking"=>$jg['parking-braking'],"Front-Tyre"=>$jg['Front-Tyre'],"rear-tire"=>$jg['rear-tire']);
        $data['underpan_braking'] = json_encode($underpan_braking,JSON_UNESCAPED_UNICODE);

        //安全配置
        $safety_configuration = array("deputy-airbags"=>$jg['deputy-airbags'],"side-airbags"=>$jg['side-airbags'],"Head-Airbag"=>$jg['Head-Airbag'],"tire-pressure"=>$jg['tire-pressure'],"central-locking"=>$jg['central-locking'],"ISO-FIX-LATCH"=>$jg['ISO-FIX-LATCH'],"KEYLESS-GO"=>$jg['KEYLESS-GO'],"ABS"=>$jg['ABS'],"ESP"=>$jg['ESP']);
        $data['safety_configuration'] = json_encode($safety_configuration,JSON_UNESCAPED_UNICODE);

        //外部配置
        $exterior_configuration = array("power-sunroof"=>$jg['power-sunroof'],"panoramic-sunroof"=>$jg['panoramic-sunroof'],"Electric-suction-door"=>$jg['Electric-suction-door'],"Induction-trunk"=>$jg['Induction-trunk'],"Rain-sensing-Wipers"=>$jg['Rain-sensing-Wipers'],"rear-wiper"=>$jg['rear-wiper'],"AND-POWER-WINDOWS"=>$jg['AND-POWER-WINDOWS'],"power-mirror"=>$jg['power-mirror'],"warm-mirror"=>$jg['warm-mirror']);
        $data['exterior_configuration'] = json_encode($exterior_configuration,JSON_UNESCAPED_UNICODE);

        //内容配置
        $interior_configuration = array("MFL"=>$jg['MFL'],"cruise-control"=>$jg['cruise-control'],"air-conditioner"=>$jg['air-conditioner'],"automatic-air-conditioning"=>$jg['automatic-air-conditioning'],"GPS"=>$jg['GPS'],"car-backing-radar"=>$jg['car-backing-radar'],"Back-eye-camera"=>$jg['Back-eye-camera'],"leather-seat"=>$jg['leather-seat'],"seat-heating"=>$jg['seat-heating']);
        $data['interior_configuration'] = json_encode($interior_configuration,JSON_UNESCAPED_UNICODE);

        //获取检测数据

        //事故检测
        $accident = array("left-frame"=>$jg['left-frame'],"right-frame"=>$jg['right-frame'],"Left-front-lining"=>$jg['Left-front-lining'],"Right-front-lining"=>$jg['Right-front-lining'],"Left-damper-holder"=>$jg['Left-damper-holder'],"right-damper-holder"=>$jg['right-damper-holder'],"Left-longeron"=>$jg['Left-longeron'],"Right-longeron"=>$jg['Right-longeron'],"firewall"=>$jg['firewall'],"Right-A-column"=>$jg['Right-A-column'],"Right-B-column"=>$jg['Right-B-column'],"Right-side"=>$jg['Right-side'],"Right-C-column"=>$jg['Right-C-column'],"Right-D-column"=>$jg['Right-D-column'],"Right-edge"=>$jg['Right-edge'],"Right-floor"=>$jg['Right-floor'],"Rightrear-frame"=>$jg['Rightrear-frame'],"Right-lining"=>$jg['Right-lining'],"Leftrear-frame"=>$jg['Leftrear-frame'],"Left-lining"=>$jg['Left-lining'],"back-panel"=>$jg['back-panel'],"Trunk-board"=>$jg['Trunk-board'],"right-SPAR"=>$jg['right-SPAR'],"left-SPAR"=>$jg['left-SPAR'],"Left-D-column"=>$jg['Left-D-column'],"Left-C-column"=>$jg['Left-C-column'],"Left-side"=>$jg['Left-side'],"Left-B-column"=>$jg['Left-B-column'],"Left-A-column"=>$jg['Left-A-column'],"Left-edge"=>$jg['Left-edge'],"Left-floor"=>$jg['Left-floor']);
        $data['accident'] = json_encode($accident,JSON_UNESCAPED_UNICODE);

        //事件检测异常
        $accident_abnormal = array("left-frame1"=>$jg['left-frame1'],"right-frame1"=>$jg['right-frame1'],"Left-front-lining1"=>$jg['Left-front-lining1'],"Right-front-lining1"=>$jg['Right-front-lining1'],"Left-damper-holder1"=>$jg['Left-damper-holder1'],"right-damper-holder1"=>$jg['right-damper-holder1'],"Left-longeron1"=>$jg['Left-longeron1'],"Right-longeron1"=>$jg['Right-longeron1'],"firewall1"=>$jg['firewall1'],"Right-A-column1"=>$jg['Right-A-column1'],"Right-B-column1"=>$jg['Right-B-column1'],"Right-side1"=>$jg['Right-side1'],"Right-C-column1"=>$jg['Right-C-column1'],"Right-D-column1"=>$jg['Right-D-column1'],"Right-edge1"=>$jg['Right-edge1'],"Right-floor1"=>$jg['Right-floor1'],"Rightrear-frame1"=>$jg['Rightrear-frame1'],"Right-lining1"=>$jg['Right-lining1'],"Leftrear-frame1"=>$jg['Leftrear-frame1'],"Left-lining1"=>$jg['Left-lining1'],"back-panel1"=>$jg['back-panel1'],"Trunk-board1"=>$jg['Trunk-board1'],"right-SPAR1"=>$jg['right-SPAR1'],"left-SPAR1"=>$jg['left-SPAR1'],"Left-D-column1"=>$jg['Left-D-column1'],"Left-C-column1"=>$jg['Left-C-column1'],"Left-side1"=>$jg['Left-side1'],"Left-B-column1"=>$jg['Left-B-column1'],"Left-A-column1"=>$jg['Left-A-column1'],"Left-edge1"=>$jg['Left-edge1'],"Left-floor1"=>$jg['Left-floor1']);
        $accident_abnormal = array_filter($accident_abnormal);
        $data['accident_abnormal'] = json_encode($accident_abnormal,JSON_UNESCAPED_UNICODE);

        //泡水排查
        $soaking_water = array("Cabin-box"=>$jg['Cabin-box'],"Seat-screws"=>$jg['Seat-screws'],"Interior-harness"=>$jg['Interior-harness'],"Seat-bottom"=>$jg['Seat-bottom'],"The-cushion"=>$jg['The-cushion'],"Car-plastic"=>$jg['Car-plastic'],"Ashtray-base"=>$jg['Ashtray-base']);
        $data['soaking_water'] = json_encode($soaking_water,JSON_UNESCAPED_UNICODE);

        // 泡水排查异常
        $sw_abnormal = array("Cabin-box1"=>$jg['Cabin-box1'],"Seat-screws1"=>$jg['Seat-screws1'],"Interior-harness1"=>$jg['Interior-harness1'],"Seat-bottom1"=>$jg['Seat-bottom1'],"The-cushion1"=>$jg['The-cushion1'],"Car-plastic1"=>$jg['Car-plastic1'],"Ashtray-base1"=>$jg['Ashtray-base1']);
        $sw_abnormal = array_filter($sw_abnormal);
        $data['sw_abnormal'] = json_encode($sw_abnormal,JSON_UNESCAPED_UNICODE);

        //火烧排查
        $burn = array("Firewall-cotton"=>$jg['Firewall-cotton'],"Main-harness"=>$jg['Main-harness']);
        $data['burn'] = json_encode($burn,JSON_UNESCAPED_UNICODE);

        //火烧排查异常
        $burn_abnormal = array("Firewall-cotton1"=>$jg['Firewall-cotton1'],"Main-harness1"=>$jg['Main-harness1']);
        $burn_abnormal = array_filter($burn_abnormal);
        $data['burn_abnormal'] = json_encode($burn_abnormal,JSON_UNESCAPED_UNICODE);

        //机舱项检测
        $machinery_space = array("Engine-oil-pan"=>$jg['Engine-oil-pan'],"Antifreeze-level"=>$jg['Antifreeze-level'],"Transmission"=>$jg['Transmission'],"Engine_assembly"=>$jg['Engine_assembly'],"Brake-oil-pot"=>$jg['Brake-oil-pot'],"Booster-oil"=>$jg['Booster-oil'],"Water-tank-pipes"=>$jg['Water-tank-pipes'],"Water-tank"=>$jg['Water-tank'],"Engine-belt"=>$jg['Engine-belt'],"Engine-pad"=>$jg['Engine-pad'],"Oil-level"=>$jg['Oil-level'],"Battery"=>$jg['Battery'],"Power-pump"=>$jg['Power-pump'],"Condenser"=>$jg['Condenser'],"Transmission-pan"=>$jg['Transmission-pan']);
        $data['machinery_space'] = json_encode($machinery_space,JSON_UNESCAPED_UNICODE);

        //机舱项检测异常
        $ms_abnormal = array("Engine-oil-pan1"=>$jg['Engine-oil-pan1'],"Antifreeze-level1"=>$jg['Antifreeze-level1'],"Transmission1"=>$jg['Transmission1'],"Engine_assembly1"=>$jg['Engine_assembly1'],"Brake-oil-pot1"=>$jg['Brake-oil-pot1'],"Booster-oil1"=>$jg['Booster-oil1'],"Water-tank-pipes1"=>$jg['Water-tank-pipes1'],"Water-tank1"=>$jg['Water-tank1'],"Engine-belt1"=>$jg['Engine-belt1'],"Engine-pad1"=>$jg['Engine-pad1'],"Oil-level1"=>$jg['Oil-level1'],"Battery1"=>$jg['Battery1'],"Power-pump1"=>$jg['Power-pump1'],"Condenser1"=>$jg['Condenser1'],"Transmission-pan1"=>$jg['Transmission-pan1']);
        $ms_abnormal = array_filter($ms_abnormal);
        $data['ms_abnormal'] = json_encode($ms_abnormal,JSON_UNESCAPED_UNICODE);

        //底盘悬架项检测
        $underpan = array("Left-q-absorber"=>$jg['Left-q-absorber'],"Right-q-h-absorber"=>$jg['Right-q-h-absorber'],"Right-h-absorber"=>$jg['Right-h-absorber'],"Left-h-absorber"=>$jg['Left-h-absorber']);
        $data['underpan'] = json_encode($underpan,JSON_UNESCAPED_UNICODE);

        //底盘悬架项检测异常
        $underpan_abnormal = array("Left-q-absorber1"=>$jg['Left-q-absorber1'],"Right-q-h-absorber1"=>$jg['Right-q-h-absorber1'],"Right-h-absorber1"=>$jg['Right-h-absorber1'],"Left-h-absorber1"=>$jg['Left-h-absorber1']);
        $underpan_abnormal = array_filter($underpan_abnormal);
        $data['underpan_abnormal'] = json_encode($underpan_abnormal,JSON_UNESCAPED_UNICODE);

        //安全系统检测
        $secure = array("Driver-seat-airbag"=>$jg['Driver-seat-airbag'],"Co-pilot-airbag"=>$jg['Co-pilot-airbag'],"Front-side-airbags"=>$jg['Front-side-airbags'],"Rear-side-airbags"=>$jg['Rear-side-airbags'],"Front-head-airbags"=>$jg['Front-head-airbags'],"Rear-head-airbags"=>$jg['Rear-head-airbags'],"Tire-pressure-monitoring"=>$jg['Tire-pressure-monitoring'],"Central-locking"=>$jg['Central-locking'],"Child-seat"=>$jg['Child-seat'],"Keyless-start"=>$jg['Keyless-start'],"Keyless-entry"=>$jg['Keyless-entry'],"remote-key"=>$jg['remote-key'],"ABS_detection"=>$jg['ABS_detection'],"ESP_detection"=>$jg['ESP_detection'],"Electronic-parking-brake"=>$jg['Electronic-parking-brake']);
        $data['secure'] = json_encode($secure,JSON_UNESCAPED_UNICODE);

        //安全系统检测异常
        $secure_abnormal = array("Driver-seat-airbag1"=>$jg['Driver-seat-airbag1'],"Co-pilot-airbag1"=>$jg['Co-pilot-airbag1'],"Front-side-airbags1"=>$jg['Front-side-airbags1'],"Rear-side-airbags1"=>$jg['Rear-side-airbags1'],"Front-head-airbags1"=>$jg['Front-head-airbags1'],"Rear-head-airbags1"=>$jg['Rear-head-airbags1'],"Tire-pressure-monitoring1"=>$jg['Tire-pressure-monitoring1'],"Central-locking1"=>$jg['Central-locking1'],"Child-seat1"=>$jg['Child-seat1'],"Keyless-start1"=>$jg['Keyless-start1'],"Keyless-entry1"=>$jg['Keyless-entry1'],"remote-key1"=>$jg['remote-key1'],"ABS_detection1"=>$jg['ABS_detection1'],"ESP_detection1"=>$jg['ESP_detection1'],"Electronic-parking-brake1"=>$jg['Electronic-parking-brake1']);
        $secure_abnormal = array_filter($secure_abnormal);
        $data['secure_abnormal'] = json_encode($secure_abnormal,JSON_UNESCAPED_UNICODE);

        //外部配置检测
        $external = array("Left-h-front-hub"=>$jg['Left-h-front-hub'],"Left-front-tire"=>$jg['Left-front-tire'],"front-windshield"=>$jg['front-windshield'],"Right-q-front-hub"=>$jg['Right-q-front-hub'],"Right-front-tire"=>$jg['Right-front-tire'],"Right-front-hub"=>$jg['Right-front-hub'],"Right-rear-tire"=>$jg['Right-rear-tire'],"Rear-windshield"=>$jg['Rear-windshield'],"Right-rear-hub"=>$jg['Right-rear-hub'],"Left-rear-tire"=>$jg['Left-rear-tire'],"Panoramic-skylight"=>$jg['Panoramic-skylight'],"Induction-wipers"=>$jg['Induction-wipers'],"After-wipers"=>$jg['After-wipers'],"Front-window"=>$jg['Front-window'],"Rear-windows"=>$jg['Rear-windows'],"Rearview-mirror-adjustment"=>$jg['Rearview-mirror-adjustment'],"Rearview-mirror-fold"=>$jg['Rearview-mirror-fold'],"Rearview-heatingr"=>$jg['Rearview-heatingr'],"Electric-door"=>$jg['Electric-door'],"Rear-side-sunshade"=>$jg['Rear-side-sunshade'],"Induction"=>$jg['Induction'],"Electric-sunroof"=>$jg['Electric-sunroof']);
        $data['external'] = json_encode($external,JSON_UNESCAPED_UNICODE);

        //外部配置检测异常
        $external_abnormal = array("Left-h-front-hub1"=>$jg['Left-h-front-hub1'],"Left-front-tire1"=>$jg['Left-front-tire1'],"front-windshield1"=>$jg['front-windshield1'],"Right-q-front-hub1"=>$jg['Right-q-front-hub1'],"Right-front-tire1"=>$jg['Right-front-tire1'],"Right-front-hub1"=>$jg['Right-front-hub1'],"Right-rear-tire1"=>$jg['Right-rear-tire1'],"Rear-windshield1"=>$jg['Rear-windshield1'],"Right-rear-hub1"=>$jg['Right-rear-hub1'],"Left-rear-tire1"=>$jg['Left-rear-tire1'],"Panoramic-skylight1"=>$jg['Panoramic-skylight1'],"Induction-wipers1"=>$jg['Induction-wipers1'],"After-wipers1"=>$jg['After-wipers1'],"Front-window1"=>$jg['Front-window1'],"Rear-windows1"=>$jg['Rear-windows1'],"Rearview-mirror-adjustment1"=>$jg['Rearview-mirror-adjustment1'],"Rearview-mirror-fold1"=>$jg['Rearview-mirror-fold1'],"Rearview-heatingr1"=>$jg['Rearview-heatingr1'],"Electric-door1"=>$jg['Electric-door1'],"Rear-side-sunshade1"=>$jg['Rear-side-sunshade1'],"Induction1"=>$jg['Induction1'],"Electric-sunroof1"=>$jg['Electric-sunroof1']);
        $external_abnormal = array_filter($external_abnormal);
        $data['external_abnormal'] = json_encode($external_abnormal,JSON_UNESCAPED_UNICODE);

        //内部配置检测
        $inside = array("Leather-seat"=>$jg['Leather-seat'],"front-heated"=>$jg['front-heated'],"Seat-ventilation"=>$jg['Seat-ventilation'],"Driver-adjustment"=>$jg['Driver-adjustment'],"Multifunction-wheel"=>$jg['Multifunction-wheel'],"Cruise"=>$jg['Cruise'],"positioning-system"=>$jg['positioning-system'],"Reversing-radar"=>$jg['Reversing-radar'],"Reverse-image"=>$jg['Reverse-image'],"Manual-conditioning"=>$jg['Manual-conditioning'],"Automatic-conditioning"=>$jg['Automatic-conditioning'],"HUD-display"=>$jg['HUD-display'],"conditioning"=>$jg['conditioning'],"air_conditioner"=>$jg['air_conditioner']);
        $data['inside'] = json_encode($inside,JSON_UNESCAPED_UNICODE);

        //内部配置检测异常
        $inside_abnormal = array("Leather-seat1"=>$jg['Leather-seat1'],"front-heated1"=>$jg['front-heated1'],"Seat-ventilation1"=>$jg['Seat-ventilation1'],"Driver-adjustment1"=>$jg['Driver-adjustment1'],"Multifunction-wheel1"=>$jg['Multifunction-wheel1'],"Cruise1"=>$jg['Cruise1'],"positioning-system1"=>$jg['positioning-system1'],"Reversing-radar1"=>$jg['Reversing-radar1'],"Reverse-image1"=>$jg['Reverse-image1'],"Manual-conditioning1"=>$jg['Manual-conditioning1'],"Automatic-conditioning1"=>$jg['Automatic-conditioning1'],"HUD-display1"=>$jg['HUD-display1'],"conditioning1"=>$jg['conditioning1'],"air_conditioner1"=>$jg['air_conditioner1']);
        $inside_abnormal = array_filter($inside_abnormal);
        $data['inside_abnormal'] = json_encode($inside_abnormal,JSON_UNESCAPED_UNICODE);

        //灯光系统检测
        $lamplight = array("Low-lights"=>$jg['Low-lights'],"High-beam"=>$jg['High-beam'],"Front-turn-signal"=>$jg['Front-turn-signal'],"Fog-q-lightsr"=>$jg['Fog-q-lightsr'],"After-signal"=>$jg['After-signal'],"brake-light"=>$jg['brake-light'],"Reversing-lights"=>$jg['Reversing-lights'],"Fog-h-lights"=>$jg['Fog-h-lights'],"Indoor-light"=>$jg['Indoor-light'],"Xenon-headlights"=>$jg['Xenon-headlights'],"LED-headlights"=>$jg['LED-headlights'],"Automatic-headlights"=>$jg['Automatic-headlights'],"Fog-q-lights"=>$jg['Fog-q-lights'],"Headlight-adjustable"=>$jg['Headlight-adjustable'],"Headlight"=>$jg['Headlight']);
        $data['lamplight'] = json_encode($lamplight,JSON_UNESCAPED_UNICODE);

        //灯光系统检测异常
        $light_abnormal = array("Low-lights1"=>$jg['Low-lights1'],"High-beam1"=>$jg['High-beam1'],"Front-turn-signal1"=>$jg['Front-turn-signal1'],"Fog-q-lightsr1"=>$jg['Fog-q-lightsr1'],"After-signal1"=>$jg['After-signal1'],"brake-light1"=>$jg['brake-light1'],"Reversing-lights1"=>$jg['Reversing-lights1'],"Fog-h-lights1"=>$jg['Fog-h-lights1'],"Indoor-light1"=>$jg['Indoor-light1'],"Xenon-headlights1"=>$jg['Xenon-headlights1'],"LED-headlights1"=>$jg['LED-headlights1'],"Automatic-headlights1"=>$jg['Automatic-headlights1'],"Fog-q-lights1"=>$jg['Fog-q-lights1'],"Headlight-adjustable1"=>$jg['Headlight-adjustable1'],"Headlight1"=>$jg['Headlight1']);
        $light_abnormal = array_filter($light_abnormal);
        $data['light_abnormal'] = json_encode($light_abnormal,JSON_UNESCAPED_UNICODE);

        //高科技配置检测
        $high_tech = array("departure-warning"=>$jg['departure-warning'],"Automatic-parking"=>$jg['Automatic-parking'],"Blind-system"=>$jg['Blind-system'],"Panoramic-camera"=>$jg['Panoramic-camera'],"Engine-automatically"=>$jg['Engine-automatically']);
        $data['high_tech'] = json_encode($high_tech,JSON_UNESCAPED_UNICODE);

        //高科技配置检测异常
        $ht_abnormal = array("departure-warning1"=>$jg['departure-warning1'],"Automatic-parking1"=>$jg['Automatic-parking1'],"Blind-system1"=>$jg['Blind-system1'],"Panoramic-camera1"=>$jg['Panoramic-camera1'],"Engine-automatically1"=>$jg['Engine-automatically1']);
        $ht_abnormal = array_filter($ht_abnormal);
        $data['ht_abnormal'] = json_encode($ht_abnormal,JSON_UNESCAPED_UNICODE);

        //灯随车工具检测
        $car_instrument = array("jack"=>$jg['jack'],"Fire-extinguisher"=>$jg['Fire-extinguisher'],"warning-signs"=>$jg['warning-signs'],"Repair-kit"=>$jg['Repair-kit'],"Spare-tire"=>$jg['Spare-tire']);
        $data['car_instrument'] = json_encode($car_instrument,JSON_UNESCAPED_UNICODE);

        //灯随车工具检测异常
        $ci_abnormal = array("jack1"=>$jg['jack1'],"Fire-extinguisher1"=>$jg['Fire-extinguisher1'],"warning-signs1"=>$jg['warning-signs1'],"Repair-kit1"=>$jg['Repair-kit1'],"Spare-tire1"=>$jg['Spare-tire1']);
        $ci_abnormal = array_filter($ci_abnormal);
        $data['ci_abnormal'] = json_encode($ci_abnormal,JSON_UNESCAPED_UNICODE);

        //仪表台指示灯检测
        $instrument_desk = array("Tune-car"=>$jg['Tune-car'],"Brake-indicator"=>$jg['Brake-indicator'],"Airbag-light"=>$jg['Airbag-light'],"Body-light"=>$jg['Body-light'],"Engine-light"=>$jg['Engine-light'],"Transmission-light"=>$jg['Transmission-light']);
        $data['instrument_desk'] = json_encode($instrument_desk,JSON_UNESCAPED_UNICODE);

        //仪表台指示灯检测异常
        $id_abnormal = array("Tune-car1"=>$jg['Tune-car1'],"Brake-indicator1"=>$jg['Brake-indicator1'],"Airbag-light1"=>$jg['Airbag-light1'],"Body-light1"=>$jg['Body-light1'],"Engine-light1"=>$jg['Engine-light1'],"Transmission-light1"=>$jg['Transmission-light1']);
        $id_abnormal = array_filter($id_abnormal);
        $data['id_abnormal'] = json_encode($id_abnormal,JSON_UNESCAPED_UNICODE);

        //发动机状态检测
        $engine = array("start-up"=>$jg['start-up'],"Idle-speed"=>$jg['Idle-speed'],"Engine-shake"=>$jg['Engine-shake'],"exhaust"=>$jg['exhaust']);
        $data['engine'] = json_encode($engine,JSON_UNESCAPED_UNICODE);

        //发动机状态检测异常
        $engine_abnormal = array("start-up1"=>$jg['start-up1'],"Idle-speed1"=>$jg['Idle-speed1'],"Engine-shake1"=>$jg['Engine-shake1'],"exhaust1"=>$jg['exhaust1']);
        $engine_abnormal = array_filter($engine_abnormal);
        $data['engine_abnormal'] = json_encode($engine_abnormal,JSON_UNESCAPED_UNICODE);

        //变速箱及转向检测
        $gearbox = array("Gearbox-gear"=>$jg['Gearbox-gear'],"Turn"=>$jg['Turn']);
        $data['gearbox'] = json_encode($gearbox,JSON_UNESCAPED_UNICODE);

        //变速箱及转向检测异常
        $gearbox_abnormal = array("Gearbox-gear1"=>$jg['Gearbox-gear1'],"Turn1"=>$jg['Turn1']);
        $gearbox_abnormal = array_filter($gearbox_abnormal);
        $data['gearbox_abnormal'] = json_encode($gearbox_abnormal,JSON_UNESCAPED_UNICODE);
        $data = array_filter($data);

        //添加到数据库
        $res = examining::where('car_id',$id)->update($data);
        if($res){
             echo "<script>alert('修改成功！');location.href='/admin/estimate/wait'</script>";   
        }else{
            echo "<script>alert('修改失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
        }

    }
}
