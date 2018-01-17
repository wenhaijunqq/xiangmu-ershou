@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

    <!-- 内容区域 -->
    
    <div class="tpl-content-wrapper">
        <div class="container-fluid am-cf">
            <div class="row">
               <div class="am-u-sm-12 am-u-md-12 am-u-lg-6" style="width:100%">
                        <div class="widget am-cf" >
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">评估报告表</div>
                                <div class="widget-function am-fr">
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr" >
                            <form  method="post" class="am-form tpl-form-line-form" action="/admin/estimate/writeassess/{{$id}}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}                                  
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">基本参数</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ”来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="manufacturer">厂商:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="manufacturer" class="tpl-form-input" name="manufacturer" placeholder="请输入厂商" />
                                            </td>
                                            <td width="25%">
                                                <label for="grade">级别:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="grade" class="tpl-form-input" name="grade" placeholder="请输入级别" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="engine">发动机:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="engine" class="tpl-form-input" name="engine" placeholder="请输入发动机类型" />
                                            </td>
                                            <td>
                                                <label for="gearbox">变速箱:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="gearbox" class="tpl-form-input" name="gearbox" placeholder="请输入变速箱类型" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="body-structure">车身结构:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="body-structure" class="tpl-form-input" name="body-structure" placeholder="请输入车身结构" />
                                            </td>
                                            <td>
                                                <label for="volume">长*宽*高(mm):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="volume" class="tpl-form-input" name="volume" placeholder="请输入长*宽*高(mm)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="wheel-base">轴距(mm):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="wheel-base" class="tpl-form-input" name="wheel-base" placeholder="请输入轴距(mm)" />
                                            </td>
                                            <td>
                                                <label for="boot">行李箱容积(L):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="boot" class="tpl-form-input" name="boot" placeholder="请输入行李箱容积(L)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="weight">整备质量(kg):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="weight" class="tpl-form-input" name="weight" placeholder="请输入整备质量(kg)" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">发动机参数</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ” 来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="displacement">排量(L):</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="displacement" class="tpl-form-input" name="displacement" placeholder="请输入排量(L)" />
                                            </td>
                                            <td width="25%">
                                                <label for="air-suction">进气形式:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="air-suction" class="tpl-form-input" name="air-suction" placeholder="请输入进气形式" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-cylinder">气缸:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="air-cylinder" class="tpl-form-input" name="air-cylinder" placeholder="请输入气缸类型" />
                                            </td>
                                            <td>
                                                <label for="horsepower">最大马力(Ps):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="horsepower" class="tpl-form-input" name="horsepower" placeholder="请输入最大马力(Ps)" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="torque">最大扭矩(N*m):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="torque" class="tpl-form-input" name="torque" placeholder="请输入最大扭矩(N*m)" />
                                            </td>
                                            <td>
                                                <label for="Fuel-type">燃料类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Fuel-type" class="tpl-form-input" name="Fuel-type" placeholder="请输入燃料类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="fuel-oil">燃油标号:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="fuel-oil" class="tpl-form-input" name="fuel-oil" placeholder="请输入燃油标号" />
                                            </td>
                                            <td>
                                                <label for="Oil-drive">供油方式:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Oil-drive" class="tpl-form-input" name="Oil-drive" placeholder="请输入供油方式" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="emission-standard">排放标准:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="emission-standard" class="tpl-form-input" name="emission-standard" placeholder="请输入排放标准" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">底盘及制动</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ” 来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="drive">驱动方式:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="drive" class="tpl-form-input" name="drive" placeholder="请输入驱动方式" />
                                            </td>
                                            <td width="25%">
                                                <label for="assistance">助力类型:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="assistance" class="tpl-form-input" name="assistance" placeholder="请输入助力类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="forward-mounting">前悬挂类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="forward-mounting" class="tpl-form-input" name="forward-mounting" placeholder="请输入前悬挂类型" />
                                            </td>
                                            <td>
                                                <label for="Rear-Suspension">后悬挂类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Rear-Suspension" class="tpl-form-input" name="Rear-Suspension" placeholder="请输入后悬挂类型" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="front-brake">前制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="front-brake" class="tpl-form-input" name="front-brake" placeholder="请输入前制动类型" />
                                            </td>
                                            <td>
                                                <label for="rear-brake">后制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-brake" class="tpl-form-input" name="rear-brake" placeholder="请输入后制动类型" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="parking-braking">驻车制动类型:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="parking-braking" class="tpl-form-input" name="parking-braking" placeholder="请输入驻车制动类型" />
                                            </td>
                                            <td>
                                                <label for="Front-Tyre">前轮胎规格:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Front-Tyre" class="tpl-form-input" name="Front-Tyre" placeholder="请输入前轮胎规格" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="rear-tire">后轮胎规格:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-tire" class="tpl-form-input" name="rear-tire" placeholder="请输入后轮胎规格" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">安全配置</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ” 来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="deputy-airbags">主副驾驶安全气囊:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="deputy-airbags" class="tpl-form-input" name="deputy-airbags" placeholder="请输入主副驾驶安全气囊" />
                                            </td>
                                            <td width="25%">
                                                <label for="side-airbags">前后排侧气囊:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="side-airbags" class="tpl-form-input" name="side-airbags" placeholder="请输入前后排侧气囊" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Head-Airbag">前后排头部气囊:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Head-Airbag" class="tpl-form-input" name="Head-Airbag" placeholder="请输入前后排头部气囊" />
                                            </td>
                                            <td>
                                                <label for="tire-pressure">胎压检测:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="tire-pressure" class="tpl-form-input" name="tire-pressure" placeholder="请输入胎压检测" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="central-locking">车内中控锁:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="central-locking" class="tpl-form-input" name="central-locking" placeholder="请输入车内中控锁" />
                                            </td>
                                            <td>
                                                <label for="ISO-FIX-LATCH">儿童座椅接口:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ISO-FIX-LATCH" class="tpl-form-input" name="ISO-FIX-LATCH" placeholder="请输入儿童座椅接口" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="KEYLESS-GO">无钥匙启动:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="KEYLESS-GO" class="tpl-form-input" name="KEYLESS-GO" placeholder="请输入无钥匙启动" />
                                            </td>
                                            <td>
                                                <label for="ABS">防抱死系统(ABS):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ABS" class="tpl-form-input" name="ABS" placeholder="请输入防抱死系统(ABS)" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="ESP">车身稳定控制(ESP):</label>
                                            </td>
                                            <td>
                                                <input type="text" id="ESP" class="tpl-form-input" name="ESP" placeholder="请输入车身稳定控制(ESP)" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">外部配置</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ” 来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="power-sunroof">电动天窗:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="power-sunroof" class="tpl-form-input" name="power-sunroof" placeholder="请输入电动天窗" />
                                            </td>
                                            <td width="25%">
                                                <label for="panoramic-sunroof">全景天窗:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="panoramic-sunroof" class="tpl-form-input" name="panoramic-sunroof" placeholder="请输入全景天窗" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Electric-suction-door">电动吸合门:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Electric-suction-door" class="tpl-form-input" name="Electric-suction-door" placeholder="请输入电动吸合门" />
                                            </td>
                                            <td>
                                                <label for="Induction-trunk">感应后备箱:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Induction-trunk" class="tpl-form-input" name="Induction-trunk" placeholder="请输入感应后备箱" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="Rain-sensing-Wipers">感应雨刷:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Rain-sensing-Wipers" class="tpl-form-input" name="Rain-sensing-Wipers" placeholder="请输入感应雨刷" />
                                            </td>
                                            <td>
                                                <label for="rear-wiper">后雨刷:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="rear-wiper" class="tpl-form-input" name="rear-wiper" placeholder="请输入后雨刷" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="AND-POWER-WINDOWS">前后电动车窗:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="AND-POWER-WINDOWS" class="tpl-form-input" name="AND-POWER-WINDOWS" placeholder="请输入前后电动车窗" />
                                            </td>
                                            <td>
                                                <label for="power-mirror">后视镜电动调节:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="power-mirror" class="tpl-form-input" name="power-mirror" placeholder="请输入后视镜电动调节" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="warm-mirror">后视镜加热:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="warm-mirror" class="tpl-form-input" name="warm-mirror" placeholder="请输入后视镜加热" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">内部配置</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ - ”或 “ ” 来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%">
                                                <label for="MFL">多功能方向盘:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="MFL" class="tpl-form-input" name="MFL" placeholder="请输入多功能方向盘" />
                                            </td>
                                            <td width="25%">
                                                <label for="cruise-control">定速巡航:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="text" id="cruise-control" class="tpl-form-input" name="cruise-control" placeholder="请输入定速巡航" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-conditioner">空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="air-conditioner" class="tpl-form-input" name="air-conditioner" placeholder="请输入空调" />
                                            </td>
                                            <td>
                                                <label for="automatic-air-conditioning">自动空调:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="automatic-air-conditioning" class="tpl-form-input" name="automatic-air-conditioning" placeholder="请输入自动空调" />
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="GPS">GPS导航:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="GPS" class="tpl-form-input" name="GPS" placeholder="请输入GPS导航" />
                                            </td>
                                            <td>
                                                <label for="car-backing-radar">倒车雷达:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="car-backing-radar" class="tpl-form-input" name="car-backing-radar" placeholder="请输入倒车雷达" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Back-eye-camera">倒车影像系统:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="Back-eye-camera" class="tpl-form-input" name="Back-eye-camera" placeholder="请输入倒车影像系统" />
                                            </td>
                                            <td>
                                                <label for="leather-seat">真皮座椅:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="leather-seat" class="tpl-form-input" name="leather-seat" placeholder="请输入真皮座椅" />
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="seat-heating">前后排座椅加热:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="seat-heating" class="tpl-form-input" name="seat-heating" placeholder="请输入前后排座椅加热" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">事故排查检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="left-frame">左前大灯框架:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="left-frame" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="left-frame" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="left-frame" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="left-frame" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="left-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="right-frame">右前大灯框架:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="right-frame" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="right-frame" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="right-frame" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="right-frame" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="right-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-front-lining">左前翼子板内衬:</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-front-lining" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-front-lining" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-front-lining" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-front-lining" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-front-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-front-lining">右前翼子板内衬:</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-front-lining" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-front-lining" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-front-lining" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-front-lining" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-front-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-damper-holder">左前减震器座:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-damper-holder" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-damper-holder" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-damper-holder" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-damper-holder" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-damper-holder1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="right-damper-holder">右前减震器座:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="right-damper-holder" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="right-damper-holder" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="right-damper-holder" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="right-damper-holder" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="right-damper-holder1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-longeron">左前纵梁:</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-longeron" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-longeron" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-longeron" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-longeron" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-longeron1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-longeron">右前纵梁:</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-longeron" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-longeron" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-longeron" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-longeron" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-longeron1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="firewall">防火墙</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="firewall" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="firewall" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="firewall" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="firewall" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="firewall1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-A-column">右A柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-A-column" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-A-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-A-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-A-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-A-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-B-column">右B柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-B-column" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-B-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-B-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-B-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-B-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-side">右侧顶边梁</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-side" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-side" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-side" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-side" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-side1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-C-column">右C柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-C-column" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-C-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-C-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-C-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-C-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-D-column">右D柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-D-column" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-D-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-D-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-D-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-D-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-edge">右侧底大边</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-edge" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-edge" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-edge" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-edge" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-edge1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-floor">右侧驾驶舱底板</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-floor" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-floor" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-floor" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-floor" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-floor1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Rightrear-frame">右侧尾灯框架</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Rightrear-frame" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rightrear-frame" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rightrear-frame" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rightrear-frame" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rightrear-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-lining">右后翼子板内衬</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-lining" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Right-lining" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-lining" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-lining" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Leftrear-frame">左侧尾灯框架</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Leftrear-frame" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Leftrear-frame" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Leftrear-frame" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Leftrear-frame" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Leftrear-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-lining">左后翼子板内衬</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-lining" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-lining" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-lining" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-lining" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="back-panel">后围板</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="back-panel" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="back-panel" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="back-panel" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="back-panel" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="back-panel1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Trunk-board">后备箱底板</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Trunk-board" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Trunk-board" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Trunk-board" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Trunk-board" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Trunk-board1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="right-SPAR">右后纵梁</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="right-SPAR" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="right-SPAR" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="right-SPAR" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="right-SPAR" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="right-SPAR1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="left-SPAR">左后纵梁</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="left-SPAR" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="left-SPAR" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="left-SPAR" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="left-SPAR" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="left-SPAR1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-D-column">左D柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-D-column" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-D-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-D-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-D-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-D-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-C-column">左C柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-C-column" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Left-C-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-C-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-C-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-C-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-side">左侧顶边梁</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-side" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-side" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-side" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-side" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-side1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-B-column">左B柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-B-column" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Left-B-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-B-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-B-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-B-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-A-column">左A柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-A-column" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-A-column" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-A-column" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-A-column" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-A-column1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-edge">左侧底大边</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-edge" value="3" onclick="del($(this))"/>取消此项
                                                 <input type="radio" name="Left-edge" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-edge" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-edge" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-edge1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-floor">左侧驾驶舱底板</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-floor" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-floor" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-floor" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-floor" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-floor1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">泡水排查检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Cabin-box">机舱保险盒</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Cabin-box" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Cabin-box" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Cabin-box" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Cabin-box" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Cabin-box1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Seat-screws">座椅滑轨及固定螺丝</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-screws" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Seat-screws" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Seat-screws" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Seat-screws" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Seat-screws1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Interior-harness">车内线束</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Interior-harness" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Interior-harness" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Interior-harness" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Interior-harness" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Interior-harness1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Seat-bottom">安全带底部</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-bottom" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Seat-bottom" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Seat-bottom" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Seat-bottom" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Seat-bottom1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="The-cushion">全车座椅座垫</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="The-cushion" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="The-cushion" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="The-cushion" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="The-cushion" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="The-cushion1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Car-plastic">全车地毯地胶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Car-plastic" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Car-plastic" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Car-plastic" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Car-plastic" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Car-plastic1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Ashtray-base">烟灰缸底座</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Ashtray-base" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Ashtray-base" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Ashtray-base" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Ashtray-base" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Ashtray-base1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                 </tbody>
                            </table>
                             <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">火烧排查检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Firewall-cotton">防火墙隔音棉</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Firewall-cotton" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Firewall-cotton" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Firewall-cotton" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Firewall-cotton" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Firewall-cotton1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Main-harness">发动机主线束</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Main-harness" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Main-harness" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Main-harness" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Main-harness" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Main-harness1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">机舱项检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-oil-pan">发动机油底壳</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-oil-pan" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-oil-pan" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-oil-pan" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-oil-pan" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-oil-pan1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Antifreeze-level">防冻液液面</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Antifreeze-level" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Antifreeze-level" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Antifreeze-level" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Antifreeze-level" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Antifreeze-level1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                   
                                    
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission">变速箱总成</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Transmission" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Transmission" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Transmission" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Transmission1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine assembly">发动机总成</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine assembly" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine assembly" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine assembly" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine assembly" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine assembly1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Brake-oil-pot">制动油壶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Brake-oil-pot" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Brake-oil-pot" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Brake-oil-pot" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Brake-oil-pot" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Brake-oil-pot1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Booster-oil">助力油壶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Booster-oil" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Booster-oil" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Booster-oil" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Booster-oil" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Booster-oil1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Water-tank-pipes">水箱水管</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Water-tank-pipes" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Water-tank-pipes" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Water-tank-pipes" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Water-tank-pipes" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Water-tank-pipes1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Water-tank">水箱</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Water-tank" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Water-tank" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Water-tank" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Water-tank" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Water-tank1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-belt">发动机外围皮带</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-belt" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-belt" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-belt" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-belt" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-belt1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-pad">发动机缸垫</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-pad" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-pad" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-pad" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-pad" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-pad1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Oil-level">机油液面</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Oil-level" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Oil-level" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Oil-level" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Oil-level" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Oil-level1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Battery">电瓶（极柱）</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Battery" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Battery" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Battery" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Battery" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Battery1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Power-pump">转向助力泵</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Power-pump" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Power-pump" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Power-pump" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Power-pump" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Power-pump1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Condenser">冷凝器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Condenser" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Condenser" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Condenser" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Condenser" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Condenser1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission-pan">变速箱油底壳</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission-pan" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Transmission-pan" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Transmission-pan" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Transmission-pan" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Transmission-pan1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">底盘悬架项检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-q-absorber">左前减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-q-absorber" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-q-absorber" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-q-absorber" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-q-absorber" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-q-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-q-absorber">右前减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-q-h-absorber" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-q-h-absorber" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-q-h-absorber" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-q-h-absorber" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-q-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-absorber">右后减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-h-absorber" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-h-absorber" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-h-absorber" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-h-absorber" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-h-absorber">左后减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-h-absorber" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-h-absorber" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-h-absorber" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-h-absorber" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">安全系统检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Driver-seat-airbag">驾驶座安全气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Driver-seat-airbag" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Driver-seat-airbag" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Driver-seat-airbag" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Driver-seat-airbag" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Driver-seat-airbag1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Co-pilot-airbag">副驾驶安全气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Co-pilot-airbag" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Co-pilot-airbag" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Co-pilot-airbag" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Co-pilot-airbag" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Co-pilot-airbag1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-side-airbags">前排侧气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-side-airbags" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Front-side-airbags" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Front-side-airbags" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Front-side-airbags" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Front-side-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-side-airbags">后排侧气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-side-airbags" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rear-side-airbags" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rear-side-airbags" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rear-side-airbags" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rear-side-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-head-airbags">前排头部气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-head-airbags" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Front-head-airbags" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Front-head-airbags" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Front-head-airbags" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Front-head-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-head-airbags">后排头部气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-head-airbags" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rear-head-airbags" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rear-head-airbags" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rear-head-airbags" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rear-head-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Tire-pressure-monitoring">胎压监测</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Tire-pressure-monitoring" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Tire-pressure-monitoring" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Tire-pressure-monitoring" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Tire-pressure-monitoring" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Tire-pressure-monitoring1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Central-locking">中控锁</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Central-locking" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Central-locking" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Central-locking" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Central-locking" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Central-locking1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Child-seat">儿童座椅接口</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Child-seat" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Child-seat" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Child-seat" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Child-seat" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Child-seat1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Keyless start">无钥匙启动</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Keyless-start" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Keyless-start" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Keyless-start" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Keyless-start" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Keyless-start1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Keyless-entry">无钥匙进入系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Keyless-entry" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Keyless-entry" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Keyless-entry" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Keyless-entry" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Keyless-entry1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="remote-key">遥控钥匙</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="remote-key" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="remote-key" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="remote-key" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="remote-key" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="remote-key1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="ABS_detection">防抱死系统(ABS)</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="ABS_detection" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="ABS_detection" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="ABS_detection" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="ABS_detection" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="ABS_detection1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="ESP_detection">车身稳定控制(ESP)</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="ESP_detection" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="ESP_detection" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="ESP_detection" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="ESP_detection" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="ESP_detection1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Electronic-parking-brake">电子驻车制动</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electronic-parking-brake" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Electronic-parking-brake" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Electronic-parking-brake" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Electronic-parking-brake" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Electronic-parking-brake1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">外部配置检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-h-front-hub">左前轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-h-front-hub" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-h-front-hub" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-h-front-hub" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-h-front-hub" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-h-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-front-tire">左前轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-front-tire" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-front-tire" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-front-tire" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-front-tire" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-front-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="front-windshield">前挡风玻璃</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="front-windshield" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="front-windshield" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="front-windshield" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="front-windshield" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="front-windshield1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-q-front-hub">右前轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-q-front-hub" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-q-front-hub" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-q-front-hub" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-q-front-hub" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-q-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-front-tire">右前轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-front-tire" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-front-tire" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-front-tire" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-front-tire" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-front-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-front-hub">右后轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-front-hub" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-front-hub" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-front-hub" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-front-hub" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-rear-tire">右后轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-rear-tire" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-rear-tire" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-rear-tire" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-rear-tire" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-rear-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-windshield">后挡风玻璃</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-windshield" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rear-windshield" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rear-windshield" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rear-windshield" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rear-windshield1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-rear-hub">左后轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-rear-hub" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Right-rear-hub" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Right-rear-hub" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Right-rear-hub" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Right-rear-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-rear-tire">左后轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-rear-tire" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Left-rear-tire" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Left-rear-tire" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Left-rear-tire" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Left-rear-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Panoramic-skylight">全景天窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Panoramic-skylight" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Panoramic-skylight" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Panoramic-skylight" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Panoramic-skylight" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Panoramic-skylight1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Induction-wipers">感应雨刷</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Induction-wipers" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Induction-wipers" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Induction-wipers" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Induction-wipers" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Induction-wipers1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="After-wipers">后雨刷</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="After-wipers" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="After-wipers" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="After-wipers" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="After-wipers" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="After-wipers1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-window">前电动车窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-window" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Front-window" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Front-window" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Front-window" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Front-window1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-windows">后电动车窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-windows" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rear-windows" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rear-windows" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rear-windows" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rear-windows1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-mirror-adjustment">后视镜电动调节</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-mirror-adjustment" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rearview-mirror-adjustment" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rearview-mirror-adjustment" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rearview-mirror-adjustment" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rearview-mirror-adjustment1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-mirror-fold">后视镜电动折叠</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-mirror-fold" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rearview-mirror-fold" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rearview-mirror-fold" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rearview-mirror-fold" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rearview-mirror-fold1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-heatingr">后视镜加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-heatingr" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rearview-heatingr" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rearview-heatingr" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rearview-heatingr" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rearview-heatingr1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Electric-door"> 电动吸合门</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electric-door" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Electric-door" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Electric-door" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Electric-door" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Electric-door1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-side-sunshade">后排侧遮阳帘</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-side-sunshade" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Rear-side-sunshade" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Rear-side-sunshade" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Rear-side-sunshade" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Rear-side-sunshade1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Induction">感应后备箱</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Induction" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Induction" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Induction" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Induction" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Induction1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Electric-sunroof">电动天窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electric-sunroof" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Electric-sunroof" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Electric-sunroof" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Electric-sunroof" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Electric-sunroof1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                       
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">内部配置检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Leather-seat">皮质座椅</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Leather-seat" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Leather-seat" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Leather-seat" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Leather-seat" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Leather-seat1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="front-heated">前排座椅加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="front-heated" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="front-heated" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="front-heated" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="front-heated" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="front-heated1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Seat-ventilation">座椅通风</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-ventilation" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Seat-ventilation" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Seat-ventilation" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Seat-ventilation" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Seat-ventilation1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Driver-adjustment">驾驶座座椅电动调节</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Driver-adjustment" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Driver-adjustment" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Driver-adjustment" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Driver-adjustment" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Driver-adjustment1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Multifunction-wheel">多功能方向盘</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Multifunction-wheel" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Multifunction-wheel" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Multifunction-wheel" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Multifunction-wheel" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Multifunction-wheel1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Cruise">定速巡航</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Cruise" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Cruise" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Cruise" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Cruise" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Cruise1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="positioning-system">GPS导航</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="positioning-system" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="positioning-system" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="positioning-system" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="positioning-system" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="positioning-system1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Reversing-radar">倒车雷达</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reversing-radar" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Reversing-radar" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Reversing-radar" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Reversing-radar" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Reversing-radar1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Reverse-image">倒车影像系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reverse-image" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Reverse-image" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Reverse-image" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Reverse-image" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Reverse-image1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Manual-conditioning">手动空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Manual-conditioning" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Manual-conditioning" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Manual-conditioning" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Manual-conditioning" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Manual-conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-conditioning">自动空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-conditioning" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Automatic-conditioning" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Automatic-conditioning" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Automatic-conditioning" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Automatic-conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="HUD-display">HUD抬头显示</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="HUD-display" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="HUD-display" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="HUD-display" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="HUD-display" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="HUD-display1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="conditioning">后排座椅加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="conditioning" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="conditioning" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="conditioning" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="conditioning" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="air_conditioner">空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="air_conditioner" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="air_conditioner" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="air_conditioner" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="air_conditioner" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="air_conditioner1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">灯光系统检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                     <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Low-lights">近光灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Low-lights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Low-lights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Low-lights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Low-lights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Low-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="High-beam">远光灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="High-beam" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="High-beam" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="High-beam" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="High-beam" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="High-beam1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-turn-signal">前转向灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-turn-signal" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Front-turn-signal" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Front-turn-signal" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Front-turn-signal" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Front-turn-signal1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-q-lightsr">前雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-q-lightsr" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Fog-q-lightsr" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Fog-q-lightsr" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Fog-q-lightsr" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Fog-q-lightsr1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="After-signal">后转向灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="After-signal" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="After-signal" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="After-signal" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="After-signal" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="After-signal1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="brake-light">刹车灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="brake-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="brake-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="brake-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="brake-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="brake-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Reversing-lights">倒车灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reversing-lights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Reversing-lights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Reversing-lights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Reversing-lights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Reversing-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-h-lights">后雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-h-lights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Fog-h-lights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Fog-h-lights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Fog-h-lights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Fog-h-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Indoor-light">室内顶灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Indoor-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Indoor-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Indoor-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Indoor-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Indoor-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Xenon-headlights">氙气大灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Xenon-headlights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Xenon-headlights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Xenon-headlights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Xenon-headlights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Xenon-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="LED-headlights">LED大灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="LED-headlights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="LED-headlights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="LED-headlights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="LED-headlights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="LED-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-headlights">自动头灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-headlights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Automatic-headlights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Automatic-headlights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Automatic-headlights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Automatic-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-q-lights">前雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-q-lights" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Fog-q-lights" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Fog-q-lights" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Fog-q-lights" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Fog-q-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Headlight-adjustable">大灯高度可调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Headlight-adjustable" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Headlight-adjustable" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Headlight-adjustable" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Headlight-adjustable" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Headlight-adjustable1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Headlight">大灯清洗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Headlight" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Headlight" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Headlight" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Headlight" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Headlight1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">高科技配置检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="departure-warning">车道偏离预警系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="departure-warning" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="departure-warning" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="departure-warning" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="departure-warning" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="departure-warning1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-parking">自动泊车</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-parking" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Automatic-parking" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Automatic-parking" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Automatic-parking" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Automatic-parking1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr><tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Blind-system">盲点辅助系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Blind-system" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Blind-system" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Blind-system" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Blind-system" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Blind-system1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Panoramic-camera">全景摄像头</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Panoramic-camera" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Panoramic-camera" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Panoramic-camera" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Panoramic-camera" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Panoramic-camera1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-automatically">发动机自动启停</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-automatically" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-automatically" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-automatically" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-automatically" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-automatically1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>

                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">灯随车工具检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="jack">千斤顶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="jack" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="jack" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="jack" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="jack" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="jack1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fire-extinguisher">灭火器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fire-extinguisher" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Fire-extinguisher" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Fire-extinguisher" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Fire-extinguisher" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Fire-extinguisher1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="warning-signs">三角警示标</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="warning-signs" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="warning-signs" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="warning-signs" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="warning-signs" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="warning-signs1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Repair-kit">维修工具包</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Repair-kit" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Repair-kit" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Repair-kit" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Repair-kit" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Repair-kit1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Spare-tire">备胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Spare-tire" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Spare-tire" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Spare-tire" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Spare-tire" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Spare-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">仪表台指示灯检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Tune-car">调表车</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Tune-car" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Tune-car" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Tune-car" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Tune-car" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Tune-car1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Brake-indicator">制动系统指示灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Brake-indicator" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Brake-indicator" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Brake-indicator" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Brake-indicator" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Brake-indicator1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Airbag-light">安全气囊故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Airbag-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Airbag-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Airbag-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Airbag-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Airbag-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Body-light">车身稳定系统故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Body-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Body-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Body-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Body-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Body-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-light">发动机故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission-light">变速箱故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission-light" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Transmission-light" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Transmission-light" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Transmission-light" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Transmission-light1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">发动机状态检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                    <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="start-up">启动</label>
                                            </td>
                                            <td width="25%">
                                                <input type="radio" name="start-up" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="start-up" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="start-up" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="start-up" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="start-up1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Idle-speed">怠速</label>
                                            </td>
                                            <td width="25%">
                                                <input type="radio" name="Idle-speed" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Idle-speed" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Idle-speed" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Idle-speed" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Idle-speed1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-shake">发动机抖动</label>
                                            </td>
                                            <td width="25%">
                                                <input type="radio" name="Engine-shake" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Engine-shake" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Engine-shake" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Engine-shake" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Engine-shake1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="exhaust">尾气</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="exhaust" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="exhaust" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="exhaust" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="exhaust" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="exhaust1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">变速箱及转向检测</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项为车辆没有此项功能 ，取消此项为车型没有此项检测！）</th>
                                        </tr>
                                    </thead>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Gearbox-gear">变速箱挂挡</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Gearbox-gear" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Gearbox-gear" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Gearbox-gear" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Gearbox-gear" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Gearbox-gear1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Turn">转向</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Turn" value="3" onclick="del($(this))"/>取消此项
                                                <input type="radio" name="Turn" value="2" onclick="not($(this))"/>没有此项
                                                <input type="radio" name="Turn" value="0" checked = "checked" onclick="normal($(this))"/>正常
                                                <input type="radio" name="Turn" value="1" onclick="unusual($(this))"/>异常
                                                <input type="text" name="Turn1" value="" style="display:none" placeholder="请输入异常信息">
                                            </td>
                                        </tr>
                                </table>
                               
                                <div class="am-form-group" style="margin-left:300px;">
                                        <div class="am-u-sm-9 am-u-sm-push-3" onclick="tijiao()">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " id="submit" > 提交</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <script type="text/javascript">

                      
                        $('#submit').click(function(){
                           var yichang = $('input[value=1][checked=checked]');
                            if(yichang.length == 0){
                                return true;
                            }else{
                               var arr = new Array();
                                    var h = 0;
                                   yichang.each(function(i){
                                        var zhi = $(this).next().val();
                                        if(zhi == ''){

                                        }else{
                                            
                                            
                                            arr[h] = zhi;
                                            h ++;
                                        }
                                        
                                   });

                                   // console.log(arr.length)
                                   // console.log(yichang.length)
                                if(arr.length == yichang.length){
                                    return true;
                                }else{
                                    layer.msg('有异常信息没有填写，请填写异常信息!');
                                    // alert('有异常信息没有填写，请填写异常信息!');
                                    return false;
                                }

                            }
                               
                                
                               
                            });
                        
                        
                        function unusual(obj)
                        {
                            //alert(obj);
                            obj.next().css('display','block');
                            obj.attr('checked','checked');
                            obj.prev().removeAttr('checked');
                            obj.prev().prev().removeAttr('checked');
                            obj.prev().prev().prev().removeAttr('checked');
                        }
                        function normal(obj)
                        {
                            //alert(obj);
                            obj.next().next().css('display','none');
                            obj.next().next().val('');
                            obj.attr('checked','checked');
                            obj.prev().removeAttr('checked');
                            obj.prev().prev().removeAttr('checked');
                            obj.next().removeAttr('checked');

                        }
                        function not(obj)
                        {
                            //alert(obj);
                            obj.next().next().next().css('display','none');
                            obj.next().next().next().val('');
                            obj.attr('checked','checked');
                            obj.prev().removeAttr('checked');
                            obj.next().removeAttr('checked');
                            obj.next().next().removeAttr('checked');

                        }
                        function del(obj)
                        {
                            //alert(obj);
                            obj.next().next().next().next().css('display','none');
                            obj.next().next().next().next().val('');
                            obj.attr('checked','checked');
                            obj.next().removeAttr('checked');
                            obj.next().next().removeAttr('checked');
                            obj.next().next().next().removeAttr('checked');

                        }

                    </script>
    
            </div>
        </div>
    </div>

</body>

</html>
@endsection