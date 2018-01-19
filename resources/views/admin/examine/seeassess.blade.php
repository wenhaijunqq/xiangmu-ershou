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
                            <form  method="post" class="am-form tpl-form-line-form" >
                                <table width="100%" class=" am-table-compact  tpl-table-black " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align:center">基本参数</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center;color:red">（注意：没有此项参数用“ 一 ”或 “ ”来表示！）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">

                                            <td width="25%">
                                                <label for="manufacturer">厂商:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['basic_parameter'],true)['manufacturer'])
                                                <input type="text" id="manufacturer" class="tpl-form-input" name="manufacturer"  value="{{json_decode($data['basic_parameter'],true)['manufacturer']}}" readonly="readonly" placeholder="请输入厂商" />
                                                @else
                                                <input type="text" id="manufacturer"  class="tpl-form-input" name="manufacturer"  value="一" readonly="readonly" style="text-align:center" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="grade">级别:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['basic_parameter'],true)['grade'])
                                                <input type="text" id="grade" class="tpl-form-input" name="grade" value="{{json_decode($data['basic_parameter'],true)['grade']}}" readonly="readonly" placeholder="请输入等级"/>
                                                @else
                                                <input type="text" id="grade" class="tpl-form-input" name="grade" value="一" style="text-align:center" readonly="readonly" placeholder="请输入等级"/>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="engine">发动机:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['engine'])
                                                <input type="text" id="engine" class="tpl-form-input" name="engine" value="{{json_decode($data['basic_parameter'],true)['engine']}}" readonly="readonly" placeholder="请输入发动机类型" />
                                                @else
                                                <input type="text" id="engine" class="tpl-form-input" name="engine" value="一" style="text-align:center" readonly="readonly" placeholder="请输入发动机类型" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="gearbox">变速箱:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['gearbox'])
                                                <input type="text" id="gearbox" class="tpl-form-input" name="gearbox" value="{{json_decode($data['basic_parameter'],true)['gearbox']}}" readonly="readonly" placeholder="请输入变速箱类型" />
                                                @else
                                                <input type="text" id="gearbox" class="tpl-form-input" name="gearbox" value="一" style="text-align:center" readonly="readonly" placeholder="请输入变速箱类型" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="body-structure">车身结构:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['body-structure'])
                                                <input type="text" id="body-structure" class="tpl-form-input" name="body-structure" value="{{json_decode($data['basic_parameter'],true)['body-structure']}}" readonly="readonly" placeholder="请输入车身结构" />
                                                @else
                                                <input type="text" id="body-structure" class="tpl-form-input" name="body-structure" value="一" style="text-align:center" readonly="readonly" placeholder="请输入车身结构" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="volume">长*宽*高(mm):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['volume'])
                                                <input type="text" id="volume" class="tpl-form-input" name="volume" value="{{json_decode($data['basic_parameter'],true)['volume']}}" readonly="readonly" placeholder="请输入长*宽*高(mm)" />
                                                @else
                                                <input type="text" id="volume" class="tpl-form-input" name="volume" value="一" style="text-align:center" readonly="readonly" placeholder="请输入长*宽*高(mm)" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="wheel-base">轴距(mm):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['wheel-base'])
                                                <input type="text" id="wheel-base" class="tpl-form-input" name="wheel-base" value="{{json_decode($data['basic_parameter'],true)['wheel-base']}}" readonly="readonly" placeholder="请输入轴距(mm)" />
                                                @else
                                                <input type="text" id="wheel-base" class="tpl-form-input" name="wheel-base" value="一" style="text-align:center" readonly="readonly" placeholder="请输入轴距(mm)" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="boot">行李箱容积(L):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['boot'])
                                                <input type="text" id="boot" class="tpl-form-input" name="boot" value="{{json_decode($data['basic_parameter'],true)['boot']}}" readonly="readonly" placeholder="请输入行李箱容积(L)" />
                                                @else
                                                <input type="text" id="boot" class="tpl-form-input" name="boot" value="一" style="text-align:center" readonly="readonly" placeholder="请输入行李箱容积(L)" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="weight">整备质量(kg):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['basic_parameter'],true)['weight'])
                                                <input type="text" id="weight" class="tpl-form-input" name="weight" value="{{json_decode($data['basic_parameter'],true)['weight']}}" readonly="readonly" placeholder="请输入整备质量(kg)" />
                                                @else
                                                <input type="text" id="weight" class="tpl-form-input" name="weight" value="一" style="text-align:center" readonly="readonly" placeholder="请输入整备质量(kg)" />
                                                @endif
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
                                                @if(json_decode($data['engine_parameter'],true)['displacement'])
                                                <input type="text" id="displacement" class="tpl-form-input" name="displacement" value="{{json_decode($data['engine_parameter'],true)['displacement']}}" readonly="readonly" placeholder="请输入排量(L)" />
                                                @else
                                                <input type="text" id="displacement" class="tpl-form-input" name="displacement" value="一" style="text-align:center" readonly="readonly" placeholder="请输入排量(L)" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="air-suction">进气形式:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['engine_parameter'],true)['air-suction'])
                                                <input type="text" id="air-suction" class="tpl-form-input" name="air-suction" value="{{json_decode($data['engine_parameter'],true)['air-suction']}}" readonly="readonly" placeholder="请输入进气形式" />
                                                @else
                                                <input type="text" id="air-suction" class="tpl-form-input" name="air-suction" value="一" style="text-align:center" readonly="readonly" placeholder="请输入进气形式" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-cylinder">气缸:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['air-cylinder'])
                                                <input type="text" id="air-cylinder" class="tpl-form-input" name="air-cylinder" value="{{json_decode($data['engine_parameter'],true)['air-cylinder']}}" readonly="readonly" placeholder="请输入气缸类型" />
                                                @else
                                                <input type="text" id="air-cylinder" class="tpl-form-input" name="air-cylinder" value="一" style="text-align:center" readonly="readonly" placeholder="请输入气缸类型" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="horsepower">最大马力(Ps):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['horsepower'])
                                                <input type="text" id="horsepower" class="tpl-form-input" name="horsepower" value="{{json_decode($data['engine_parameter'],true)['horsepower']}}" readonly="readonly" placeholder="请输入最大马力(Ps)" />
                                                @else
                                                <input type="text" id="horsepower" class="tpl-form-input" name="horsepower" value="一" style="text-align:center" readonly="readonly" placeholder="请输入最大马力(Ps)" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="torque">最大扭矩(N*m):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['torque'])
                                                <input type="text" id="torque" class="tpl-form-input" name="torque" value="{{json_decode($data['engine_parameter'],true)['torque']}}" readonly="readonly" placeholder="请输入最大扭矩(N*m)" />
                                                @else
                                                <input type="text" id="torque" class="tpl-form-input" name="torque" value="一" style="text-align:center" readonly="readonly" placeholder="请输入最大扭矩(N*m)" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="Fuel-type">燃料类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['Fuel-type'])
                                                <input type="text" id="Fuel-type" class="tpl-form-input" name="Fuel-type" value="{{json_decode($data['engine_parameter'],true)['Fuel-type']}}" readonly="readonly" placeholder="请输入燃料类型" />
                                                @else
                                                <input type="text" id="Fuel-type" class="tpl-form-input" name="Fuel-type" value="一" style="text-align:center" readonly="readonly" placeholder="请输入燃料类型" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="fuel-oil">燃油标号:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['fuel-oil'])
                                                <input type="text" id="fuel-oil" class="tpl-form-input" name="fuel-oil" value="{{json_decode($data['engine_parameter'],true)['fuel-oil']}}" readonly="readonly" placeholder="请输入燃油标号" />
                                                @else
                                                <input type="text" id="fuel-oil" class="tpl-form-input" name="fuel-oil" value="一" style="text-align:center" readonly="readonly" placeholder="请输入燃油标号" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="Oil-drive">供油方式:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['Oil-drive'])
                                                <input type="text" id="Oil-drive" class="tpl-form-input" name="Oil-drive" value="{{json_decode($data['engine_parameter'],true)['Oil-drive']}}" readonly="readonly" placeholder="请输入供油方式" />
                                                @else
                                                <input type="text" id="Oil-drive" class="tpl-form-input" name="Oil-drive" value="一" style="text-align:center" readonly="readonly" placeholder="请输入供油方式" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="emission-standard">排放标准:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['engine_parameter'],true)['emission-standard'])
                                                <input type="text" id="emission-standard" class="tpl-form-input" name="emission-standard" value="{{json_decode($data['engine_parameter'],true)['emission-standard']}}" readonly="readonly" placeholder="请输入排放标准" />
                                                @else
                                                <input type="text" id="emission-standard" class="tpl-form-input" name="emission-standard" value="一" style="text-align:center" readonly="readonly" placeholder="请输入排放标准" />
                                                @endif
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
                                                @if(json_decode($data['underpan_braking'],true)['drive'])
                                                <input type="text" id="drive" class="tpl-form-input" name="drive" value="{{json_decode($data['underpan_braking'],true)['drive']}}" readonly="readonly" placeholder="请输入驱动方式" />
                                                @else
                                                <input type="text" id="drive" class="tpl-form-input" name="drive" value="一" style="text-align:center" readonly="readonly" placeholder="请输入驱动方式" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="assistance">助力类型:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['underpan_braking'],true)['assistance'])
                                                <input type="text" id="assistance" class="tpl-form-input" name="assistance" value="{{json_decode($data['underpan_braking'],true)['assistance']}}" readonly="readonly" placeholder="请输入助力类型" />
                                                @else
                                                <input type="text" id="assistance" class="tpl-form-input" name="assistance" value="一" style="text-align:center" readonly="readonly" placeholder="请输入助力类型" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="forward-mounting">前悬挂类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['forward-mounting'])
                                                <input type="text" id="forward-mounting" class="tpl-form-input" name="forward-mounting" value="{{json_decode($data['underpan_braking'],true)['forward-mounting']}}" readonly="readonly" placeholder="请输入前悬挂类型" />
                                                @else
                                                <input type="text" id="forward-mounting" class="tpl-form-input" name="forward-mounting" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前悬挂类型" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="Rear-Suspension">后悬挂类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['Rear-Suspension'])
                                                <input type="text" id="Rear-Suspension" class="tpl-form-input" name="Rear-Suspension" value="{{json_decode($data['underpan_braking'],true)['Rear-Suspension']}}" readonly="readonly" placeholder="请输入后悬挂类型" />
                                                @else
                                                <input type="text" id="Rear-Suspension" class="tpl-form-input" name="Rear-Suspension" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后悬挂类型" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="front-brake">前制动类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['front-brake'])
                                                <input type="text" id="front-brake" class="tpl-form-input" name="front-brake" value="{{json_decode($data['underpan_braking'],true)['front-brake']}}" readonly="readonly" placeholder="请输入前制动类型" />
                                                @else
                                                <input type="text" id="front-brake" class="tpl-form-input" name="front-brake" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前制动类型" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="rear-brake">后制动类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['rear-brake'])
                                                <input type="text" id="rear-brake" class="tpl-form-input" name="rear-brake" value="{{json_decode($data['underpan_braking'],true)['rear-brake']}}" readonly="readonly" placeholder="请输入后制动类型" />
                                                @else
                                                <input type="text" id="rear-brake" class="tpl-form-input" name="rear-brake" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后制动类型" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="parking-braking">驻车制动类型:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['parking-braking'])
                                                <input type="text" id="parking-braking" class="tpl-form-input" name="parking-braking" value="{{json_decode($data['underpan_braking'],true)['parking-braking']}}" readonly="readonly" placeholder="请输入驻车制动类型" />
                                                @else
                                                <input type="text" id="parking-braking" class="tpl-form-input" name="parking-braking" value="一" style="text-align:center" readonly="readonly" placeholder="请输入驻车制动类型" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="Front-Tyre">前轮胎规格:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['Front-Tyre'])
                                                <input type="text" id="Front-Tyre" class="tpl-form-input" name="Front-Tyre" value="{{json_decode($data['underpan_braking'],true)['Front-Tyre']}}" readonly="readonly" placeholder="请输入前轮胎规格" />
                                                @else
                                                <input type="text" id="Front-Tyre" class="tpl-form-input" name="Front-Tyre" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前轮胎规格" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="rear-tire">后轮胎规格:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['underpan_braking'],true)['rear-tire'])
                                                <input type="text" id="rear-tire" class="tpl-form-input" name="rear-tire" value="{{json_decode($data['underpan_braking'],true)['rear-tire']}}" readonly="readonly" placeholder="请输入后轮胎规格" />
                                                @else
                                                <input type="text" id="rear-tire" class="tpl-form-input" name="rear-tire" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后轮胎规格" />
                                                @endif
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
                                                @if(json_decode($data['safety_configuration'],true)['deputy-airbags'])
                                                <input type="text" id="deputy-airbags" class="tpl-form-input" name="deputy-airbags" value="{{json_decode($data['safety_configuration'],true)['deputy-airbags']}}" readonly="readonly" placeholder="请输入主副驾驶安全气囊" />
                                                @else
                                                <input type="text" id="deputy-airbags" class="tpl-form-input" name="deputy-airbags" value="一" style="text-align:center" readonly="readonly" placeholder="请输入主副驾驶安全气囊" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="side-airbags">前后排侧气囊:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['safety_configuration'],true)['side-airbags'])
                                                <input type="text" id="side-airbags" class="tpl-form-input" name="side-airbags" value="{{json_decode($data['safety_configuration'],true)['side-airbags']}}" readonly="readonly" placeholder="请输入前后排侧气囊" />
                                                @else
                                                <input type="text" id="side-airbags" class="tpl-form-input" name="side-airbags" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前后排侧气囊" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Head-Airbag">前后排头部气囊:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['Head-Airbag'])
                                                <input type="text" id="Head-Airbag" class="tpl-form-input" name="Head-Airbag" value="{{json_decode($data['safety_configuration'],true)['Head-Airbag']}}" readonly="readonly" placeholder="请输入前后排头部气囊" />
                                                @else
                                                <input type="text" id="Head-Airbag" class="tpl-form-input" name="Head-Airbag" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前后排头部气囊" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="tire-pressure">胎压检测:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['tire-pressure'])
                                                <input type="text" id="tire-pressure" class="tpl-form-input" name="tire-pressure" value="{{json_decode($data['safety_configuration'],true)['tire-pressure']}}" readonly="readonly" placeholder="请输入胎压检测" />
                                                @else
                                                <input type="text" id="tire-pressure" class="tpl-form-input" name="tire-pressure" value="一" style="text-align:center" readonly="readonly" placeholder="请输入胎压检测" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="central-locking">车内中控锁:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['central-locking'])
                                                <input type="text" id="central-locking" class="tpl-form-input" name="central-locking" value="{{json_decode($data['safety_configuration'],true)['central-locking']}}" readonly="readonly" placeholder="请输入车内中控锁" />
                                                @else
                                                <input type="text" id="central-locking" class="tpl-form-input" name="central-locking" value="一" style="text-align:center" readonly="readonly" placeholder="请输入车内中控锁" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="ISO-FIX-LATCH">儿童座椅接口:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['ISO-FIX-LATCH'])
                                                <input type="text" id="ISO-FIX-LATCH" class="tpl-form-input" name="ISO-FIX-LATCH" value="{{json_decode($data['safety_configuration'],true)['ISO-FIX-LATCH']}}" readonly="readonly" placeholder="请输入儿童座椅接口" />
                                                @else
                                                <input type="text" id="ISO-FIX-LATCH" class="tpl-form-input" name="ISO-FIX-LATCH" value="一" style="text-align:center" readonly="readonly" placeholder="请输入儿童座椅接口" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="KEYLESS-GO">无钥匙启动:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['KEYLESS-GO'])
                                                <input type="text" id="KEYLESS-GO" class="tpl-form-input" name="KEYLESS-GO" value="{{json_decode($data['safety_configuration'],true)['KEYLESS-GO']}}" readonly="readonly" placeholder="请输入无钥匙启动" />
                                                @else
                                                <input type="text" id="KEYLESS-GO" class="tpl-form-input" name="KEYLESS-GO" value="一" style="text-align:center" readonly="readonly" placeholder="请输入无钥匙启动" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="ABS">防抱死系统(ABS):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['ABS'])
                                                <input type="text" id="ABS" class="tpl-form-input" name="ABS" value="{{json_decode($data['safety_configuration'],true)['ABS']}}" readonly="readonly" placeholder="请输入防抱死系统(ABS)" />
                                                @else
                                                <input type="text" id="ABS" class="tpl-form-input" name="ABS" value="一" style="text-align:center" readonly="readonly" placeholder="请输入防抱死系统(ABS)" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="ESP">车身稳定控制(ESP):</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['safety_configuration'],true)['ESP'])
                                                <input type="text" id="ESP" class="tpl-form-input" name="ESP" value="{{json_decode($data['safety_configuration'],true)['ESP']}}" readonly="readonly" placeholder="请输入车身稳定控制(ESP)" />
                                                @else
                                                <input type="text" id="ESP" class="tpl-form-input" name="ESP" value="一" style="text-align:center" readonly="readonly" placeholder="请输入车身稳定控制(ESP)" />
                                                @endif
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
                                                @if(json_decode($data['exterior_configuration'],true)['power-sunroof'])
                                                <input type="text" id="power-sunroof" class="tpl-form-input" name="power-sunroof" value="{{json_decode($data['exterior_configuration'],true)['power-sunroof']}}" readonly="readonly" placeholder="请输入电动天窗" />
                                                @else
                                                <input type="text" id="power-sunroof" class="tpl-form-input" name="power-sunroof" value="一" style="text-align:center" readonly="readonly" placeholder="请输入电动天窗" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="panoramic-sunroof">全景天窗:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['exterior_configuration'],true)['panoramic-sunroof'])
                                                <input type="text" id="panoramic-sunroof" class="tpl-form-input" name="panoramic-sunroof" value="{{json_decode($data['exterior_configuration'],true)['panoramic-sunroof']}}" readonly="readonly" placeholder="请输入全景天窗" />
                                                @else
                                                <input type="text" id="panoramic-sunroof" class="tpl-form-input" name="panoramic-sunroof" value="一" style="text-align:center" readonly="readonly" placeholder="请输入全景天窗" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Electric-suction-door">电动吸合门:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['Electric-suction-door'])
                                                <input type="text" id="Electric-suction-door" class="tpl-form-input" name="Electric-suction-door" value="{{json_decode($data['exterior_configuration'],true)['Electric-suction-door']}}" readonly="readonly" placeholder="请输入电动吸合门" />
                                                @else
                                                <input type="text" id="Electric-suction-door" class="tpl-form-input" name="Electric-suction-door" value="一" style="text-align:center" readonly="readonly" placeholder="请输入电动吸合门" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="Induction-trunk">感应后备箱:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['Induction-trunk'])
                                                <input type="text" id="Induction-trunk" class="tpl-form-input" name="Induction-trunk" value="{{json_decode($data['exterior_configuration'],true)['Induction-trunk']}}" readonly="readonly" placeholder="请输入感应后备箱" />
                                                @else
                                                <input type="text" id="Induction-trunk" class="tpl-form-input" name="Induction-trunk" value="一" style="text-align:center" readonly="readonly" placeholder="请输入感应后备箱" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="Rain-sensing-Wipers">感应雨刷:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['Rain-sensing-Wipers'])
                                                <input type="text" id="Rain-sensing-Wipers" class="tpl-form-input" name="Rain-sensing-Wipers" value="{{json_decode($data['exterior_configuration'],true)['Rain-sensing-Wipers']}}" readonly="readonly" placeholder="请输入感应雨刷" />
                                                @else
                                                <input type="text" id="Rain-sensing-Wipers" class="tpl-form-input" name="Rain-sensing-Wipers" value="一" style="text-align:center" readonly="readonly" placeholder="请输入感应雨刷" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="rear-wiper">后雨刷:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['rear-wiper'])
                                                <input type="text" id="rear-wiper" class="tpl-form-input" name="rear-wiper" value="{{json_decode($data['exterior_configuration'],true)['rear-wiper']}}" readonly="readonly" placeholder="请输入后雨刷" />
                                                @else
                                                <input type="text" id="rear-wiper" class="tpl-form-input" name="rear-wiper" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后雨刷" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="AND-POWER-WINDOWS">前后电动车窗:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['AND-POWER-WINDOWS'])
                                                <input type="text" id="AND-POWER-WINDOWS" class="tpl-form-input" name="AND-POWER-WINDOWS" value="{{json_decode($data['exterior_configuration'],true)['AND-POWER-WINDOWS']}}" readonly="readonly" placeholder="请输入前后电动车窗" />
                                                @else
                                                <input type="text" id="AND-POWER-WINDOWS" class="tpl-form-input" name="AND-POWER-WINDOWS" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前后电动车窗" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="power-mirror">后视镜电动调节:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['power-mirror'])
                                                <input type="text" id="power-mirror" class="tpl-form-input" name="power-mirror" value="{{json_decode($data['exterior_configuration'],true)['power-mirror']}}" readonly="readonly" placeholder="请输入后视镜电动调节" />
                                                @else
                                                <input type="text" id="power-mirror" class="tpl-form-input" name="power-mirror" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后视镜电动调节" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="warm-mirror">后视镜加热:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['exterior_configuration'],true)['warm-mirror'])
                                                <input type="text" id="warm-mirror" class="tpl-form-input" name="warm-mirror" value="{{json_decode($data['exterior_configuration'],true)['warm-mirror']}}" readonly="readonly" placeholder="请输入后视镜加热" />
                                                @else
                                                <input type="text" id="warm-mirror" class="tpl-form-input" name="warm-mirror" value="一" style="text-align:center" readonly="readonly" placeholder="请输入后视镜加热" />
                                                @endif
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
                                                @if(json_decode($data['interior_configuration'],true)['MFL'])
                                                <input type="text" id="MFL" class="tpl-form-input" name="MFL" value="{{json_decode($data['interior_configuration'],true)['MFL']}}" readonly="readonly" placeholder="请输入多功能方向盘" />
                                                @else
                                                <input type="text" id="MFL" class="tpl-form-input" name="MFL" value="一" style="text-align:center" readonly="readonly" placeholder="请输入多功能方向盘" />
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <label for="cruise-control">定速巡航:</label>
                                            </td>
                                            <td width="25%%">
                                                @if(json_decode($data['interior_configuration'],true)['cruise-control'])
                                                <input type="text" id="cruise-control" class="tpl-form-input" name="cruise-control" value="{{json_decode($data['interior_configuration'],true)['cruise-control']}}" readonly="readonly" placeholder="请输入定速巡航" />
                                                @else
                                                <input type="text" id="cruise-control" class="tpl-form-input" name="cruise-control" value="一" style="text-align:center" readonly="readonly" placeholder="请输入定速巡航" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="air-conditioner">空调:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['air-conditioner'])
                                                <input type="text" id="air-conditioner" class="tpl-form-input" name="air-conditioner" value="{{json_decode($data['interior_configuration'],true)['air-conditioner']}}" readonly="readonly" placeholder="请输入空调" />
                                                @else
                                                <input type="text" id="air-conditioner" class="tpl-form-input" name="air-conditioner" value="一" style="text-align:center" readonly="readonly" placeholder="请输入空调" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="automatic-air-conditioning">自动空调:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['air-conditioner'])
                                                <input type="text" id="automatic-air-conditioning" class="tpl-form-input" name="automatic-air-conditioning" value="{{json_decode($data['interior_configuration'],true)['automatic-air-conditioning']}}" readonly="readonly" placeholder="请输入自动空调" />
                                                @else
                                                <input type="text" id="automatic-air-conditioning" class="tpl-form-input" name="automatic-air-conditioning" value="一" style="text-align:center" readonly="readonly" placeholder="请输入自动空调" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>
                                                <label for="GPS">GPS导航:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['GPS'])
                                                <input type="text" id="GPS" class="tpl-form-input" name="GPS" value="{{json_decode($data['interior_configuration'],true)['GPS']}}" readonly="readonly" placeholder="请输入GPS导航" />
                                                @else
                                                <input type="text" id="GPS" class="tpl-form-input" name="GPS" value="一" style="text-align:center" readonly="readonly" placeholder="请输入GPS导航" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="car-backing-radar">倒车雷达:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['car-backing-radar'])
                                                <input type="text" id="car-backing-radar" class="tpl-form-input" name="car-backing-radar" value="{{json_decode($data['interior_configuration'],true)['car-backing-radar']}}" readonly="readonly" placeholder="请输入倒车雷达" />
                                                @else
                                                <input type="text" id="car-backing-radar" class="tpl-form-input" name="car-backing-radar" value="一" style="text-align:center" readonly="readonly" placeholder="请输入倒车雷达" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>
                                                <label for="Back-eye-camera">倒车影像系统:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['Back-eye-camera'])
                                                <input type="text" id="Back-eye-camera" class="tpl-form-input" name="Back-eye-camera" value="{{json_decode($data['interior_configuration'],true)['Back-eye-camera']}}" readonly="readonly" placeholder="请输入倒车影像系统" />
                                                @else
                                                <input type="text" id="Back-eye-camera" class="tpl-form-input" name="Back-eye-camera" value="一" style="text-align:center" readonly="readonly" placeholder="请输入倒车影像系统" />
                                                @endif
                                            </td>
                                            <td>
                                                <label for="leather-seat">真皮座椅:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['leather-seat'])
                                                <input type="text" id="leather-seat" class="tpl-form-input" name="leather-seat" value="{{json_decode($data['interior_configuration'],true)['leather-seat']}}" readonly="readonly" placeholder="请输入真皮座椅" />
                                                @else
                                                <input type="text" id="leather-seat" class="tpl-form-input" name="leather-seat" value="一" style="text-align:center" readonly="readonly" placeholder="请输入真皮座椅" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                             <td>
                                                <label for="seat-heating">前后排座椅加热:</label>
                                            </td>
                                            <td>
                                                @if(json_decode($data['interior_configuration'],true)['seat-heating'])
                                                <input type="text" id="seat-heating" class="tpl-form-input" name="seat-heating" value="{{json_decode($data['interior_configuration'],true)['seat-heating']}}" readonly="readonly" placeholder="请输入前后排座椅加热" />
                                                @else
                                                <input type="text" id="seat-heating" class="tpl-form-input" name="seat-heating" value="一" style="text-align:center" readonly="readonly" placeholder="请输入前后排座椅加热" />
                                                @endif
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
                                                <input type="radio" name="left-frame" value="3" {{json_decode($data['accident'],true)['left-frame'] == 3? "checked" :"" }} onclick="return false" />取消此项
                                                <input type="radio" name="left-frame" value="2" {{json_decode($data['accident'],true)['left-frame'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="left-frame" value="0" {{json_decode($data['accident'],true)['left-frame'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="left-frame" value="1" {{json_decode($data['accident'],true)['left-frame'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['left-frame'] == 1)
                                                <input type="text" name="left-frame1" value="{{json_decode($data['accident_abnormal'],true)['left-frame1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="left-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="right-frame">右前大灯框架:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="right-frame" value="3" {{json_decode($data['accident'],true)['right-frame'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="right-frame" value="2" {{json_decode($data['accident'],true)['right-frame'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="right-frame" value="0" {{json_decode($data['accident'],true)['right-frame'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="right-frame" value="1" {{json_decode($data['accident'],true)['right-frame'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['right-frame'] == 1)
                                                <input type="text" name="right-frame1" value="{{json_decode($data['accident_abnormal'],true)['right-frame1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="right-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-front-lining">左前翼子板内衬:</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-front-lining" value="3" {{json_decode($data['accident'],true)['Left-front-lining'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-front-lining" value="2" {{json_decode($data['accident'],true)['Left-front-lining'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-front-lining" value="0" {{json_decode($data['accident'],true)['Left-front-lining'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-front-lining" value="1" {{json_decode($data['accident'],true)['Left-front-lining'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-front-lining'] == 1)
                                                <input type="text" name="Left-front-lining1" value="{{json_decode($data['accident_abnormal'],true)['Left-front-lining1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-front-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-front-lining">右前翼子板内衬:</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-front-lining" value="3" {{json_decode($data['accident'],true)['Right-front-lining'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-front-lining" value="2" {{json_decode($data['accident'],true)['Right-front-lining'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-front-lining" value="0" {{json_decode($data['accident'],true)['Right-front-lining'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-front-lining" value="1" {{json_decode($data['accident'],true)['Right-front-lining'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-front-lining'] == 1)
                                                <input type="text" name="Right-front-lining1" value="{{json_decode($data['accident_abnormal'],true)['Right-front-lining1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-front-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-damper-holder">左前减震器座:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-damper-holder" value="3" {{json_decode($data['accident'],true)['Left-damper-holder'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-damper-holder" value="2" {{json_decode($data['accident'],true)['Left-damper-holder'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-damper-holder" value="0" {{json_decode($data['accident'],true)['Left-damper-holder'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-damper-holder" value="1" {{json_decode($data['accident'],true)['Left-damper-holder'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-damper-holder'] == 1)
                                                <input type="text" name="Left-damper-holder1" value="{{json_decode($data['accident_abnormal'],true)['Left-damper-holder1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-damper-holder1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="right-damper-holder">右前减震器座:</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="right-damper-holder" value="3" {{json_decode($data['accident'],true)['right-damper-holder'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="right-damper-holder" value="2" {{json_decode($data['accident'],true)['right-damper-holder'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="right-damper-holder" value="0" {{json_decode($data['accident'],true)['right-damper-holder'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="right-damper-holder" value="1" {{json_decode($data['accident'],true)['right-damper-holder'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['right-damper-holder'] == 1)
                                                <input type="text" name="right-damper-holder1" value="{{json_decode($data['accident_abnormal'],true)['right-damper-holder1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="right-damper-holder1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-longeron">左前纵梁:</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-longeron" value="3" {{json_decode($data['accident'],true)['Left-longeron'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-longeron" value="2" {{json_decode($data['accident'],true)['Left-longeron'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-longeron" value="0" {{json_decode($data['accident'],true)['Left-longeron'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-longeron" value="1" {{json_decode($data['accident'],true)['Left-longeron'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-longeron'] == 1)
                                                <input type="text" name="Left-longeron1" value="{{json_decode($data['accident_abnormal'],true)['Left-longeron1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-longeron1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-longeron">右前纵梁:</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-longeron" value="3" {{json_decode($data['accident'],true)['Right-longeron'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-longeron" value="2" {{json_decode($data['accident'],true)['Right-longeron'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-longeron" value="0" {{json_decode($data['accident'],true)['Right-longeron'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-longeron" value="1" {{json_decode($data['accident'],true)['Right-longeron'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-longeron'] == 1)
                                                <input type="text" name="Right-longeron1" value="{{json_decode($data['accident_abnormal'],true)['Right-longeron1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-longeron1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="firewall">防火墙</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="firewall" value="3" {{json_decode($data['accident'],true)['firewall'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="firewall" value="2" {{json_decode($data['accident'],true)['firewall'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="firewall" value="0" {{json_decode($data['accident'],true)['firewall'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="firewall" value="1" {{json_decode($data['accident'],true)['firewall'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['firewall'] == 1)
                                                <input type="text" name="firewall1" value="{{json_decode($data['accident_abnormal'],true)['firewall1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="firewall1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-A-column">右A柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-A-column" value="3" {{json_decode($data['accident'],true)['Right-A-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-A-column" value="2" {{json_decode($data['accident'],true)['Right-A-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-A-column" value="0" {{json_decode($data['accident'],true)['Right-A-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-A-column" value="1" {{json_decode($data['accident'],true)['Right-A-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-A-column'] == 1)
                                                <input type="text" name="Right-A-column1" value="{{json_decode($data['accident_abnormal'],true)['Right-A-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-A-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-B-column">右B柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-B-column" value="3" {{json_decode($data['accident'],true)['Right-B-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-B-column" value="2" {{json_decode($data['accident'],true)['Right-B-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-B-column" value="0" {{json_decode($data['accident'],true)['Right-B-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-B-column" value="1" {{json_decode($data['accident'],true)['Right-B-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-B-column'] == 1)
                                                <input type="text" name="Right-B-column1" value="{{json_decode($data['accident_abnormal'],true)['Right-B-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-B-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-side">右侧顶边梁</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-side" value="3" {{json_decode($data['accident'],true)['Right-side'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-side" value="2" {{json_decode($data['accident'],true)['Right-side'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-side" value="0" {{json_decode($data['accident'],true)['Right-side'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-side" value="1" {{json_decode($data['accident'],true)['Right-side'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-side'] == 1)
                                                <input type="text" name="Right-side1" value="{{json_decode($data['accident_abnormal'],true)['Right-side1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-side1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-C-column">右C柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-C-column" value="3" {{json_decode($data['accident'],true)['Right-C-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-C-column" value="2" {{json_decode($data['accident'],true)['Right-C-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-C-column" value="0" {{json_decode($data['accident'],true)['Right-C-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-C-column" value="1" {{json_decode($data['accident'],true)['Right-C-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-C-column'] == 1)
                                                <input type="text" name="Right-C-column1" value="{{json_decode($data['accident_abnormal'],true)['Right-C-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-C-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-D-column">右D柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-D-column" value="3" {{json_decode($data['accident'],true)['Right-D-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-D-column" value="2" {{json_decode($data['accident'],true)['Right-D-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-D-column" value="0" {{json_decode($data['accident'],true)['Right-D-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-D-column" value="1" {{json_decode($data['accident'],true)['Right-D-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-D-column'] == 1)
                                                <input type="text" name="Right-D-column1" value="{{json_decode($data['accident_abnormal'],true)['Right-D-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-D-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Right-edge">右侧底大边</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Right-edge" value="3" {{json_decode($data['accident'],true)['Right-edge'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-edge" value="2" {{json_decode($data['accident'],true)['Right-edge'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-edge" value="0" {{json_decode($data['accident'],true)['Right-edge'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-edge" value="1" {{json_decode($data['accident'],true)['Right-edge'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-edge'] == 1)
                                                <input type="text" name="Right-edge1" value="{{json_decode($data['accident_abnormal'],true)['Right-edge1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-edge1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-floor">右侧驾驶舱底板</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-floor" value="3" {{json_decode($data['accident'],true)['Right-floor'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-floor" value="2" {{json_decode($data['accident'],true)['Right-floor'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-floor" value="0" {{json_decode($data['accident'],true)['Right-floor'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-floor" value="1" {{json_decode($data['accident'],true)['Right-floor'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-floor'] == 1)
                                                <input type="text" name="Right-floor1" value="{{json_decode($data['accident_abnormal'],true)['Right-floor1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-floor1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Rightrear-frame">右侧尾灯框架</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Rightrear-frame" value="3" {{json_decode($data['accident'],true)['Rightrear-frame'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rightrear-frame" value="2" {{json_decode($data['accident'],true)['Rightrear-frame'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rightrear-frame" value="0" {{json_decode($data['accident'],true)['Rightrear-frame'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rightrear-frame" value="1" {{json_decode($data['accident'],true)['Rightrear-frame'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Rightrear-frame'] == 1)
                                                <input type="text" name="Rightrear-frame1" value="{{json_decode($data['accident_abnormal'],true)['Rightrear-frame1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rightrear-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Right-lining">右后翼子板内衬</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Right-lining" value="3" {{json_decode($data['accident'],true)['Right-lining'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Right-lining" value="2" {{json_decode($data['accident'],true)['Right-lining'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-lining" value="0" {{json_decode($data['accident'],true)['Right-lining'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-lining" value="1" {{json_decode($data['accident'],true)['Right-lining'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Right-lining'] == 1)
                                                <input type="text" name="Right-lining1" value="{{json_decode($data['accident_abnormal'],true)['Right-lining1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Leftrear-frame">左侧尾灯框架</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Leftrear-frame" value="3" {{json_decode($data['accident'],true)['Leftrear-frame'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Leftrear-frame" value="2" {{json_decode($data['accident'],true)['Leftrear-frame'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Leftrear-frame" value="0" {{json_decode($data['accident'],true)['Leftrear-frame'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Leftrear-frame" value="1" {{json_decode($data['accident'],true)['Leftrear-frame'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Leftrear-frame'] == 1)
                                                <input type="text" name="Leftrear-frame1" value="{{json_decode($data['accident_abnormal'],true)['Leftrear-frame1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Leftrear-frame1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-lining">左后翼子板内衬</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-lining" value="3" {{json_decode($data['accident'],true)['Left-lining'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-lining" value="2" {{json_decode($data['accident'],true)['Left-lining'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-lining" value="0" {{json_decode($data['accident'],true)['Left-lining'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-lining" value="1" {{json_decode($data['accident'],true)['Left-lining'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-lining'] == 1)
                                                <input type="text" name="Left-lining1" value="{{json_decode($data['accident_abnormal'],true)['Leftrear-frame1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-lining1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="back-panel">后围板</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="back-panel" value="3" {{json_decode($data['accident'],true)['back-panel'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="back-panel" value="2" {{json_decode($data['accident'],true)['back-panel'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="back-panel" value="0" {{json_decode($data['accident'],true)['back-panel'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="back-panel" value="1" {{json_decode($data['accident'],true)['back-panel'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['back-panel'] == 1)
                                                <input type="text" name="back-panel1" value="{{json_decode($data['accident_abnormal'],true)['back-panel1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="back-panel1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Trunk-board">后备箱底板</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Trunk-board" value="3" {{json_decode($data['accident'],true)['Trunk-board'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Trunk-board" value="2" {{json_decode($data['accident'],true)['Trunk-board'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Trunk-board" value="0" {{json_decode($data['accident'],true)['Trunk-board'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Trunk-board" value="1" {{json_decode($data['accident'],true)['Trunk-board'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Trunk-board'] == 1)
                                                <input type="text" name="Trunk-board1" value="{{json_decode($data['accident_abnormal'],true)['Trunk-board1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Trunk-board1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="right-SPAR">右后纵梁</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="right-SPAR" value="3" {{json_decode($data['accident'],true)['right-SPAR'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="right-SPAR" value="2" {{json_decode($data['accident'],true)['right-SPAR'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="right-SPAR" value="0" {{json_decode($data['accident'],true)['right-SPAR'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="right-SPAR" value="1" {{json_decode($data['accident'],true)['right-SPAR'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['right-SPAR'] == 1)
                                                <input type="text" name="right-SPAR1" value="{{json_decode($data['accident_abnormal'],true)['right-SPAR1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="right-SPAR1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="left-SPAR">左后纵梁</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="left-SPAR" value="3" {{json_decode($data['accident'],true)['left-SPAR'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="left-SPAR" value="2" {{json_decode($data['accident'],true)['left-SPAR'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="left-SPAR" value="0" {{json_decode($data['accident'],true)['left-SPAR'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="left-SPAR" value="1" {{json_decode($data['accident'],true)['left-SPAR'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['left-SPAR'] == 1)
                                                <input type="text" name="left-SPAR1" value="{{json_decode($data['accident_abnormal'],true)['left-SPAR1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="left-SPAR1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-D-column">左D柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-D-column" value="3" {{json_decode($data['accident'],true)['Left-D-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-D-column" value="2" {{json_decode($data['accident'],true)['Left-D-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-D-column" value="0" {{json_decode($data['accident'],true)['Left-D-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-D-column" value="1" {{json_decode($data['accident'],true)['Left-D-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-D-column'] == 1)
                                                <input type="text" name="Left-D-column1" value="{{json_decode($data['accident_abnormal'],true)['Left-D-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-D-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-C-column">左C柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-C-column" value="3" {{json_decode($data['accident'],true)['Left-C-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Left-C-column" value="2" {{json_decode($data['accident'],true)['Left-C-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-C-column" value="0" {{json_decode($data['accident'],true)['Left-C-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-C-column" value="1" {{json_decode($data['accident'],true)['Left-C-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-C-column'] == 1)
                                                <input type="text" name="Left-C-column1" value="{{json_decode($data['accident_abnormal'],true)['Left-C-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-C-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-side">左侧顶边梁</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-side" value="3" {{json_decode($data['accident'],true)['Left-side'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-side" value="2" {{json_decode($data['accident'],true)['Left-side'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-side" value="0" {{json_decode($data['accident'],true)['Left-side'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-side" value="1" {{json_decode($data['accident'],true)['Left-side'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-side'] == 1)
                                                <input type="text" name="Left-side1" value="{{json_decode($data['accident_abnormal'],true)['Left-side1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-side1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-B-column">左B柱</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-B-column" value="3" {{json_decode($data['accident'],true)['Left-B-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Left-B-column" value="2" {{json_decode($data['accident'],true)['Left-B-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-B-column" value="0" {{json_decode($data['accident'],true)['Left-B-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-B-column" value="1" {{json_decode($data['accident'],true)['Left-B-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-B-column'] == 1)
                                                <input type="text" name="Left-B-column1" value="{{json_decode($data['accident_abnormal'],true)['Left-B-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-B-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-A-column">左A柱</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-A-column" value="3" {{json_decode($data['accident'],true)['Left-A-column'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-A-column" value="2" {{json_decode($data['accident'],true)['Left-A-column'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-A-column" value="0" {{json_decode($data['accident'],true)['Left-A-column'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-A-column" value="1" {{json_decode($data['accident'],true)['Left-A-column'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-A-column'] == 1)
                                                <input type="text" name="Left-A-column1" value="{{json_decode($data['accident_abnormal'],true)['Left-A-column1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-A-column1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td style="text-align:center">
                                                <label for="Left-edge">左侧底大边</label>
                                            </td>
                                            <td>
                                                 <input type="radio" name="Left-edge" value="3" {{json_decode($data['accident'],true)['Left-edge'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                 <input type="radio" name="Left-edge" value="2" {{json_decode($data['accident'],true)['Left-edge'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-edge" value="0" {{json_decode($data['accident'],true)['Left-edge'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-edge" value="1" {{json_decode($data['accident'],true)['Left-edge'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-edge'] == 1)
                                                <input type="text" name="Left-edge1" value="{{json_decode($data['accident_abnormal'],true)['Left-edge1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-edge1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td style="text-align:center">
                                                <label for="Left-floor">左侧驾驶舱底板</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="Left-floor" value="3" {{json_decode($data['accident'],true)['Left-floor'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-floor" value="2" {{json_decode($data['accident'],true)['Left-floor'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-floor" value="0" {{json_decode($data['accident'],true)['Left-floor'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-floor" value="1" {{json_decode($data['accident'],true)['Left-floor'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['accident'],true)['Left-floor'] == 1)
                                                <input type="text" name="Left-floor1" value="{{json_decode($data['accident_abnormal'],true)['Left-floor1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-floor1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Cabin-box" value="3" {{json_decode($data['soaking_water'],true)['Cabin-box'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Cabin-box" value="2" {{json_decode($data['soaking_water'],true)['Cabin-box'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Cabin-box" value="0" {{json_decode($data['soaking_water'],true)['Cabin-box'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Cabin-box" value="1" {{json_decode($data['soaking_water'],true)['Cabin-box'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Cabin-box'] == 1)
                                                <input type="text" name="Cabin-box1" value="{{json_decode($data['sw_abnormal'],true)['Cabin-box1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Cabin-box1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">soaking_water
                                                <label for="Seat-screws">座椅滑轨及固定螺丝</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-screws" value="3" {{json_decode($data['soaking_water'],true)['Seat-screws'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Seat-screws" value="2" {{json_decode($data['soaking_water'],true)['Seat-screws'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Seat-screws" value="0" {{json_decode($data['soaking_water'],true)['Seat-screws'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Seat-screws" value="1" {{json_decode($data['soaking_water'],true)['Seat-screws'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Seat-screws'] == 1)
                                                <input type="text" name="Seat-screws1" value="{{json_decode($data['sw_abnormal'],true)['Seat-screws1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Seat-screws1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Interior-harness">车内线束</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Interior-harness" value="3" {{json_decode($data['soaking_water'],true)['Interior-harness'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Interior-harness" value="2" {{json_decode($data['soaking_water'],true)['Interior-harness'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Interior-harness" value="0" {{json_decode($data['soaking_water'],true)['Interior-harness'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Interior-harness" value="1" {{json_decode($data['soaking_water'],true)['Interior-harness'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Interior-harness'] == 1)
                                                <input type="text" name="Interior-harness1" value="{{json_decode($data['sw_abnormal'],true)['Interior-harness1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Interior-harness1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Seat-bottom">安全带底部</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-bottom" value="3" {{json_decode($data['soaking_water'],true)['Seat-bottom'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Seat-bottom" value="2" {{json_decode($data['soaking_water'],true)['Seat-bottom'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Seat-bottom" value="0" {{json_decode($data['soaking_water'],true)['Seat-bottom'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Seat-bottom" value="1" {{json_decode($data['soaking_water'],true)['Seat-bottom'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Seat-bottom'] == 1)
                                                <input type="text" name="Seat-bottom1" value="{{json_decode($data['sw_abnormal'],true)['Seat-bottom1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Seat-bottom1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="The-cushion">全车座椅座垫</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="The-cushion" value="3" {{json_decode($data['soaking_water'],true)['The-cushion'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="The-cushion" value="2" {{json_decode($data['soaking_water'],true)['The-cushion'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="The-cushion" value="0" {{json_decode($data['soaking_water'],true)['The-cushion'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="The-cushion" value="1" {{json_decode($data['soaking_water'],true)['The-cushion'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['The-cushion'] == 1)
                                                <input type="text" name="The-cushion1" value="{{json_decode($data['sw_abnormal'],true)['The-cushion1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="The-cushion1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Car-plastic">全车地毯地胶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Car-plastic" value="3" {{json_decode($data['soaking_water'],true)['Car-plastic'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Car-plastic" value="2" {{json_decode($data['soaking_water'],true)['Car-plastic'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Car-plastic" value="0" {{json_decode($data['soaking_water'],true)['Car-plastic'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Car-plastic" value="1" {{json_decode($data['soaking_water'],true)['Car-plastic'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Car-plastic'] == 1)
                                                <input type="text" name="Car-plastic1" value="{{json_decode($data['sw_abnormal'],true)['Car-plastic1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Car-plastic1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Ashtray-base">烟灰缸底座</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Ashtray-base" value="3" {{json_decode($data['soaking_water'],true)['Ashtray-base'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Ashtray-base" value="2" {{json_decode($data['soaking_water'],true)['Ashtray-base'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Ashtray-base" value="0" {{json_decode($data['soaking_water'],true)['Ashtray-base'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Ashtray-base" value="1" {{json_decode($data['soaking_water'],true)['Ashtray-base'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['soaking_water'],true)['Ashtray-base'] == 1)
                                                <input type="text" name="Ashtray-base1" value="{{json_decode($data['sw_abnormal'],true)['Ashtray-base1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Ashtray-base1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Firewall-cotton" value="3" {{json_decode($data['burn'],true)['Firewall-cotton'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Firewall-cotton" value="2" {{json_decode($data['burn'],true)['Firewall-cotton'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Firewall-cotton" value="0" {{json_decode($data['burn'],true)['Firewall-cotton'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Firewall-cotton" value="1" {{json_decode($data['burn'],true)['Firewall-cotton'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['burn'],true)['Firewall-cotton'] == 1)
                                                <input type="text" name="Firewall-cotton1" value="{{json_decode($data['burn_abnormal'],true)['Firewall-cotton1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Firewall-cotton1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Main-harness">发动机主线束</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Main-harness" value="3" {{json_decode($data['burn'],true)['Main-harness'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Main-harness" value="2" {{json_decode($data['burn'],true)['Main-harness'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Main-harness" value="0" {{json_decode($data['burn'],true)['Main-harness'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Main-harness" value="1" {{json_decode($data['burn'],true)['Main-harness'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['burn'],true)['Main-harness'] == 1)
                                                <input type="text" name="Main-harness1" value="{{json_decode($data['burn_abnormal'],true)['Main-harness1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Main-harness1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Engine-oil-pan" value="3" {{json_decode($data['machinery_space'],true)['Engine-oil-pan'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-oil-pan" value="2" {{json_decode($data['machinery_space'],true)['Engine-oil-pan'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-oil-pan" value="0" {{json_decode($data['machinery_space'],true)['Engine-oil-pan'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-oil-pan" value="1" {{json_decode($data['machinery_space'],true)['Engine-oil-pan'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Engine-oil-pan'] == 1)
                                                <input type="text" name="Engine-oil-pan1" value="{{json_decode($data['ms_abnormal'],true)['Engine-oil-pan1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-oil-pan1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Antifreeze-level">防冻液液面</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Antifreeze-level" value="3" {{json_decode($data['machinery_space'],true)['Antifreeze-level'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Antifreeze-level" value="2" {{json_decode($data['machinery_space'],true)['Antifreeze-level'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Antifreeze-level" value="0" {{json_decode($data['machinery_space'],true)['Antifreeze-level'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Antifreeze-level" value="1" {{json_decode($data['machinery_space'],true)['Antifreeze-level'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Antifreeze-level'] == 1)
                                                <input type="text" name="Antifreeze-level1" value="{{json_decode($data['ms_abnormal'],true)['Antifreeze-level1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Antifreeze-level1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>


                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission">变速箱总成</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission" value="3" {{json_decode($data['machinery_space'],true)['Transmission'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Transmission" value="2" {{json_decode($data['machinery_space'],true)['Transmission'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Transmission" value="0" {{json_decode($data['machinery_space'],true)['Transmission'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Transmission" value="1" {{json_decode($data['machinery_space'],true)['Transmission'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Transmission'] == 1)
                                                <input type="text" name="Transmission1" value="{{json_decode($data['ms_abnormal'],true)['Transmission1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Transmission1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">

                                                <label for="Engine assembly">发动机总成</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine assembly" value="3" {{json_decode($data['machinery_space'],true)['Engine_assembly'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine assembly" value="2" {{json_decode($data['machinery_space'],true)['Engine_assembly'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine assembly" value="0" {{json_decode($data['machinery_space'],true)['Engine_assembly'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine assembly" value="1" {{json_decode($data['machinery_space'],true)['Engine_assembly'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Engine_assembly'] == 1)
                                                <input type="text" name="Engine assembly1" value="{{json_decode($data['ms_abnormal'],true)['Engine_assembly1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine assembly1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Brake-oil-pot">制动油壶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Brake-oil-pot" value="3" {{json_decode($data['machinery_space'],true)['Brake-oil-pot'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Brake-oil-pot" value="2" {{json_decode($data['machinery_space'],true)['Brake-oil-pot'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Brake-oil-pot" value="0" {{json_decode($data['machinery_space'],true)['Brake-oil-pot'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Brake-oil-pot" value="1" {{json_decode($data['machinery_space'],true)['Brake-oil-pot'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                <@if(json_decode($data['machinery_space'],true)['Brake-oil-pot'] == 1)
                                                <input type="text" name="Brake-oil-pot1" value="{{json_decode($data['ms_abnormal'],true)['Brake-oil-pot1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Brake-oil-pot1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Booster-oil">助力油壶</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Booster-oil" value="3" {{json_decode($data['machinery_space'],true)['Booster-oil'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Booster-oil" value="2" {{json_decode($data['machinery_space'],true)['Booster-oil'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Booster-oil" value="0" {{json_decode($data['machinery_space'],true)['Booster-oil'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Booster-oil" value="1" {{json_decode($data['machinery_space'],true)['Booster-oil'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Booster-oil'] == 1)
                                                <input type="text" name="Booster-oil1" value="{{json_decode($data['ms_abnormal'],true)['Booster-oil1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Booster-oil1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Water-tank-pipes">水箱水管</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Water-tank-pipes" value="3" {{json_decode($data['machinery_space'],true)['Water-tank-pipes'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Water-tank-pipes" value="2" {{json_decode($data['machinery_space'],true)['Water-tank-pipes'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Water-tank-pipes" value="0" {{json_decode($data['machinery_space'],true)['Water-tank-pipes'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Water-tank-pipes" value="1" {{json_decode($data['machinery_space'],true)['Water-tank-pipes'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Water-tank-pipes'] == 1)
                                                <input type="text" name="Water-tank-pipes1" value="{{json_decode($data['ms_abnormal'],true)['Water-tank-pipes1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Water-tank-pipes1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Water-tank">水箱</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Water-tank" value="3" {{json_decode($data['machinery_space'],true)['Water-tank'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Water-tank" value="2" {{json_decode($data['machinery_space'],true)['Water-tank'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Water-tank" value="0" {{json_decode($data['machinery_space'],true)['Water-tank'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Water-tank" value="1" {{json_decode($data['machinery_space'],true)['Water-tank'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Water-tank'] == 1)
                                                <input type="text" name="Water-tank1" value="{{json_decode($data['ms_abnormal'],true)['Water-tank1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Water-tank1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-belt">发动机外围皮带</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-belt" value="3" {{json_decode($data['machinery_space'],true)['Engine-belt'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-belt" value="2" {{json_decode($data['machinery_space'],true)['Engine-belt'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-belt" value="0" {{json_decode($data['machinery_space'],true)['Engine-belt'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-belt" value="1" {{json_decode($data['machinery_space'],true)['Engine-belt'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Engine-belt'] == 1)
                                                <input type="text" name="Engine-belt1" value="{{json_decode($data['ms_abnormal'],true)['Engine-belt1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-belt1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-pad">发动机缸垫</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-pad" value="3" {{json_decode($data['machinery_space'],true)['Engine-pad'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-pad" value="2" {{json_decode($data['machinery_space'],true)['Engine-pad'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-pad" value="0" {{json_decode($data['machinery_space'],true)['Engine-pad'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-pad" value="1" {{json_decode($data['machinery_space'],true)['Engine-pad'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Engine-pad'] == 1)
                                                <input type="text" name="Engine-pad1" value="{{json_decode($data['ms_abnormal'],true)['Engine-pad1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-pad1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Oil-level">机油液面</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Oil-level" value="3" {{json_decode($data['machinery_space'],true)['Oil-level'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Oil-level" value="2" {{json_decode($data['machinery_space'],true)['Oil-level'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Oil-level" value="0" {{json_decode($data['machinery_space'],true)['Oil-level'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Oil-level" value="1" {{json_decode($data['machinery_space'],true)['Oil-level'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Oil-level'] == 1)
                                                <input type="text" name="Oil-level1" value="{{json_decode($data['ms_abnormal'],true)['Oil-level1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Oil-level1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Battery">电瓶（极柱）</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Battery" value="3" {{json_decode($data['machinery_space'],true)['Battery'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Battery" value="2" {{json_decode($data['machinery_space'],true)['Battery'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Battery" value="0" {{json_decode($data['machinery_space'],true)['Battery'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Battery" value="1" {{json_decode($data['machinery_space'],true)['Battery'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Battery'] == 1)
                                                <input type="text" name="Battery1" value="{{json_decode($data['ms_abnormal'],true)['Battery1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Battery1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Power-pump">转向助力泵</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Power-pump" value="3" {{json_decode($data['machinery_space'],true)['Power-pump'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Power-pump" value="2" {{json_decode($data['machinery_space'],true)['Power-pump'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Power-pump" value="0" {{json_decode($data['machinery_space'],true)['Power-pump'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Power-pump" value="1" {{json_decode($data['machinery_space'],true)['Power-pump'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Power-pump'] == 1)
                                                <input type="text" name="Power-pump1" value="{{json_decode($data['ms_abnormal'],true)['Power-pump1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Power-pump1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Condenser">冷凝器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Condenser" value="3" {{json_decode($data['machinery_space'],true)['Condenser'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Condenser" value="2" {{json_decode($data['machinery_space'],true)['Condenser'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Condenser" value="0" {{json_decode($data['machinery_space'],true)['Condenser'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Condenser" value="1" {{json_decode($data['machinery_space'],true)['Condenser'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Condenser'] == 1)
                                                <input type="text" name="Condenser1" value="{{json_decode($data['ms_abnormal'],true)['Condenser1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Condenser1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission-pan">变速箱油底壳</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission-pan" value="3" {{json_decode($data['machinery_space'],true)['Transmission-pan'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Transmission-pan" value="2" {{json_decode($data['machinery_space'],true)['Transmission-pan'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Transmission-pan" value="0" {{json_decode($data['machinery_space'],true)['Transmission-pan'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Transmission-pan" value="1" {{json_decode($data['machinery_space'],true)['Transmission-pan'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['machinery_space'],true)['Transmission-pan'] == 1)
                                                <input type="text" name="Transmission-pan1" value="{{json_decode($data['ms_abnormal'],true)['Transmission-pan1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Transmission-pan1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Left-q-absorber" value="3" {{json_decode($data['underpan'],true)['Left-q-absorber'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-q-absorber" value="2" {{json_decode($data['underpan'],true)['Left-q-absorber'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-q-absorber" value="0" {{json_decode($data['underpan'],true)['Left-q-absorber'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-q-absorber" value="1" {{json_decode($data['underpan'],true)['Left-q-absorber'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['underpan'],true)['Left-q-absorber'] == 1)
                                                <input type="text" name="Left-q-absorber1" value="{{json_decode($data['underpan_abnormal'],true)['Left-q-absorber1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-q-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-q-absorber">右前减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-q-h-absorber" value="3" {{json_decode($data['underpan'],true)['Right-q-h-absorber'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-q-h-absorber" value="2" {{json_decode($data['underpan'],true)['Right-q-h-absorber'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-q-h-absorber" value="0" {{json_decode($data['underpan'],true)['Right-q-h-absorber'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-q-h-absorber" value="1" {{json_decode($data['underpan'],true)['Right-q-h-absorber'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['underpan'],true)['Right-q-h-absorber'] == 1)
                                                <input type="text" name="Right-q-h-absorber1" value="{{json_decode($data['underpan_abnormal'],true)['Right-q-h-absorber1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-q-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-absorber">右后减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-h-absorber" value="3" {{json_decode($data['underpan'],true)['Right-h-absorber'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-h-absorber" value="2" {{json_decode($data['underpan'],true)['Right-h-absorber'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-h-absorber" value="0" {{json_decode($data['underpan'],true)['Right-h-absorber'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-h-absorber" value="1" {{json_decode($data['underpan'],true)['Right-h-absorber'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['underpan'],true)['Right-h-absorber'] == 1)
                                                <input type="text" name="Right-h-absorber1" value="{{json_decode($data['underpan_abnormal'],true)['Right-h-absorber1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-h-absorber">左后减震器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-h-absorber" value="3" {{json_decode($data['underpan'],true)['Left-h-absorber'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-h-absorber" value="2" {{json_decode($data['underpan'],true)['Left-h-absorber'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-h-absorber" value="0" {{json_decode($data['underpan'],true)['Left-h-absorber'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-h-absorber" value="1" {{json_decode($data['underpan'],true)['Left-h-absorber'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['underpan'],true)['Left-h-absorber'] == 1)
                                                <input type="text" name="Left-h-absorber1" value="{{json_decode($data['underpan_abnormal'],true)['Left-h-absorber1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-h-absorber1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Driver-seat-airbag" value="3" {{json_decode($data['secure'],true)['Driver-seat-airbag'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Driver-seat-airbag" value="2" {{json_decode($data['secure'],true)['Driver-seat-airbag'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Driver-seat-airbag" value="0" {{json_decode($data['secure'],true)['Driver-seat-airbag'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Driver-seat-airbag" value="1" {{json_decode($data['secure'],true)['Driver-seat-airbag'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Driver-seat-airbag'] == 1)
                                                <input type="text" name="Driver-seat-airbag1" value="{{json_decode($data['secure_abnormal'],true)['Driver-seat-airbag1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Driver-seat-airbag1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Co-pilot-airbag">副驾驶安全气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Co-pilot-airbag" value="3" {{json_decode($data['secure'],true)['Co-pilot-airbag'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Co-pilot-airbag" value="2" {{json_decode($data['secure'],true)['Co-pilot-airbag'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Co-pilot-airbag" value="0" {{json_decode($data['secure'],true)['Co-pilot-airbag'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Co-pilot-airbag" value="1" {{json_decode($data['secure'],true)['Co-pilot-airbag'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Co-pilot-airbag'] == 1)
                                                <input type="text" name="Co-pilot-airbag1" value="{{json_decode($data['secure_abnormal'],true)['Co-pilot-airbag1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Co-pilot-airbag1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-side-airbags">前排侧气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-side-airbags" value="3" {{json_decode($data['secure'],true)['Front-side-airbags'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Front-side-airbags" value="2" {{json_decode($data['secure'],true)['Front-side-airbags'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Front-side-airbags" value="0" {{json_decode($data['secure'],true)['Front-side-airbags'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Front-side-airbags" value="1" {{json_decode($data['secure'],true)['Front-side-airbags'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Front-side-airbags'] == 1)
                                                <input type="text" name="Front-side-airbags1" value="{{json_decode($data['secure_abnormal'],true)['Front-side-airbags1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Front-side-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-side-airbags">后排侧气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-side-airbags" value="3" {{json_decode($data['secure'],true)['Rear-side-airbags'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rear-side-airbags" value="2" {{json_decode($data['secure'],true)['Rear-side-airbags'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rear-side-airbags" value="0" {{json_decode($data['secure'],true)['Rear-side-airbags'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rear-side-airbags" value="1" {{json_decode($data['secure'],true)['Rear-side-airbags'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Rear-side-airbags'] == 1)
                                                <input type="text" name="Rear-side-airbags1" value="{{json_decode($data['secure_abnormal'],true)['Rear-side-airbags1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rear-side-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-head-airbags">前排头部气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-head-airbags" value="3" {{json_decode($data['secure'],true)['Front-head-airbags'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Front-head-airbags" value="2" {{json_decode($data['secure'],true)['Front-head-airbags'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Front-head-airbags" value="0" {{json_decode($data['secure'],true)['Front-head-airbags'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Front-head-airbags" value="1" {{json_decode($data['secure'],true)['Front-head-airbags'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Front-head-airbags'] == 1)
                                                <input type="text" name="Front-head-airbags1" value="{{json_decode($data['secure_abnormal'],true)['Front-head-airbags1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Front-head-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-head-airbags">后排头部气囊</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-head-airbags" value="3" {{json_decode($data['secure'],true)['Rear-head-airbags'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rear-head-airbags" value="2" {{json_decode($data['secure'],true)['Rear-head-airbags'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rear-head-airbags" value="0" {{json_decode($data['secure'],true)['Rear-head-airbags'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rear-head-airbags" value="1" {{json_decode($data['secure'],true)['Rear-head-airbags'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Rear-head-airbags'] == 1)
                                                <input type="text" name="Rear-head-airbags1" value="{{json_decode($data['secure_abnormal'],true)['Rear-head-airbags1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rear-head-airbags1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Tire-pressure-monitoring">胎压监测</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Tire-pressure-monitoring" value="3" {{json_decode($data['secure'],true)['Tire-pressure-monitoring'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Tire-pressure-monitoring" value="2" {{json_decode($data['secure'],true)['Tire-pressure-monitoring'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Tire-pressure-monitoring" value="0" {{json_decode($data['secure'],true)['Tire-pressure-monitoring'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Tire-pressure-monitoring" value="1" {{json_decode($data['secure'],true)['Tire-pressure-monitoring'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Tire-pressure-monitoring'] == 1)
                                                <input type="text" name="Tire-pressure-monitoring1" value="{{json_decode($data['secure_abnormal'],true)['Tire-pressure-monitoring1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Tire-pressure-monitoring1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Central-locking">中控锁</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Central-locking" value="3" {{json_decode($data['secure'],true)['Central-locking'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Central-locking" value="2" {{json_decode($data['secure'],true)['Central-locking'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Central-locking" value="0" {{json_decode($data['secure'],true)['Central-locking'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Central-locking" value="1" {{json_decode($data['secure'],true)['Central-locking'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Driver-seat-airbag'] == 1)
                                                <input type="text" name="Central-locking1" value="{{json_decode($data['secure_abnormal'],true)['Central-locking1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Central-locking1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Child-seat">儿童座椅接口</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Child-seat" value="3" {{json_decode($data['secure'],true)['Child-seat'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Child-seat" value="2" {{json_decode($data['secure'],true)['Child-seat'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Child-seat" value="0" {{json_decode($data['secure'],true)['Child-seat'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Child-seat" value="1" {{json_decode($data['secure'],true)['Child-seat'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Child-seat'] == 1)
                                                <input type="text" name="Child-seat1" value="{{json_decode($data['secure_abnormal'],true)['Child-seat1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Child-seat1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Keyless start">无钥匙启动</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Keyless-start" value="3" {{json_decode($data['secure'],true)['Keyless-start'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Keyless-start" value="2" {{json_decode($data['secure'],true)['Keyless-start'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Keyless-start" value="0" {{json_decode($data['secure'],true)['Keyless-start'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Keyless-start" value="1" {{json_decode($data['secure'],true)['Keyless-start'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Keyless-start'] == 1)
                                                <input type="text" name="Keyless-start1" value="{{json_decode($data['secure_abnormal'],true)['Keyless-start1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Keyless-start1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Keyless-entry">无钥匙进入系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Keyless-entry" value="3" {{json_decode($data['secure'],true)['Keyless-entry'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Keyless-entry" value="2" {{json_decode($data['secure'],true)['Keyless-entry'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Keyless-entry" value="0" {{json_decode($data['secure'],true)['Keyless-entry'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Keyless-entry" value="1" {{json_decode($data['secure'],true)['Keyless-entry'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Keyless-entry'] == 1)
                                                <input type="text" name="Keyless-entry1" value="{{json_decode($data['secure_abnormal'],true)['Keyless-entry1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Keyless-entry1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="remote-key">遥控钥匙</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="remote-key" value="3" {{json_decode($data['secure'],true)['remote-key'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="remote-key" value="2" {{json_decode($data['secure'],true)['remote-key'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="remote-key" value="0" {{json_decode($data['secure'],true)['remote-key'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="remote-key" value="1" {{json_decode($data['secure'],true)['remote-key'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['remote-key'] == 1)
                                                <input type="text" name="remote-key1" value="{{json_decode($data['secure_abnormal'],true)['remote-key1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="remote-key1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="ABS_detection">防抱死系统(ABS)</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="ABS_detection" value="3" {{json_decode($data['secure'],true)['ABS_detection'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="ABS_detection" value="2" {{json_decode($data['secure'],true)['ABS_detection'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="ABS_detection" value="0" {{json_decode($data['secure'],true)['ABS_detection'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="ABS_detection" value="1" {{json_decode($data['secure'],true)['ABS_detection'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['ABS_detection'] == 1)
                                                <input type="text" name="ABS_detection1" value="{{json_decode($data['secure_abnormal'],true)['ABS_detection1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="ABS_detection1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="ESP_detection">车身稳定控制(ESP)</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="ESP_detection" value="3" {{json_decode($data['secure'],true)['ESP_detection'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="ESP_detection" value="2" {{json_decode($data['secure'],true)['ESP_detection'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="ESP_detection" value="0" {{json_decode($data['secure'],true)['ESP_detection'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="ESP_detection" value="1" {{json_decode($data['secure'],true)['ESP_detection'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Driver-seat-airbag'] == 1)
                                                <input type="text" name="ESP_detection1" value="{{json_decode($data['secure_abnormal'],true)['ESP_detection1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="ESP_detection1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Electronic-parking-brake">电子驻车制动</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electronic-parking-brake" value="3" {{json_decode($data['secure'],true)['Electronic-parking-brake'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Electronic-parking-brake" value="2" {{json_decode($data['secure'],true)['Electronic-parking-brake'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Electronic-parking-brake" value="0" {{json_decode($data['secure'],true)['Electronic-parking-brake'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Electronic-parking-brake" value="1" {{json_decode($data['secure'],true)['Electronic-parking-brake'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['secure'],true)['Electronic-parking-brake'] == 1)
                                                <input type="text" name="Electronic-parking-brake1" value="{{json_decode($data['secure_abnormal'],true)['Electronic-parking-brake1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Electronic-parking-brake1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" class="am-table-compact  tpl-table-black " >

                                  <!-- 下面还没有改下次修改内容 -->
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
                                                <input type="radio" name="Left-h-front-hub" value="3" {{json_decode($data['external'],true)['Left-h-front-hub'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-h-front-hub" value="2" {{json_decode($data['external'],true)['Left-h-front-hub'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-h-front-hub" value="0" {{json_decode($data['external'],true)['Left-h-front-hub'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-h-front-hub" value="1" {{json_decode($data['external'],true)['Left-h-front-hub'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Left-h-front-hub'] == 1)
                                                <input type="text" name="Left-h-front-hub1" value="{{json_decode($data['external_abnormal'],true)['Left-h-front-hub1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-h-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-front-tire">左前轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-front-tire" value="3" {{json_decode($data['external'],true)['Left-front-tire'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-front-tire" value="2" {{json_decode($data['external'],true)['Left-front-tire'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-front-tire" value="0" {{json_decode($data['external'],true)['Left-front-tire'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-front-tire" value="1" {{json_decode($data['external'],true)['Left-front-tire'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Left-front-tire'] == 1)
                                                <input type="text" name="Left-front-tire1" value="{{json_decode($data['external_abnormal'],true)['Left-front-tire1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-front-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="front-windshield">前挡风玻璃</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="front-windshield" value="3" {{json_decode($data['external'],true)['front-windshield'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="front-windshield" value="2" {{json_decode($data['external'],true)['front-windshield'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="front-windshield" value="0" {{json_decode($data['external'],true)['front-windshield'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="front-windshield" value="1" {{json_decode($data['external'],true)['front-windshield'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['front-windshield'] == 1)
                                                <input type="text" name="front-windshield1" value="{{json_decode($data['external_abnormal'],true)['front-windshield1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="front-windshield1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-q-front-hub">右前轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-q-front-hub" value="3" {{json_decode($data['external'],true)['Right-q-front-hub'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-q-front-hub" value="2" {{json_decode($data['external'],true)['Right-q-front-hub'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-q-front-hub" value="0" {{json_decode($data['external'],true)['Right-q-front-hub'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-q-front-hub" value="1" {{json_decode($data['external'],true)['Right-q-front-hub'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Right-q-front-hub'] == 1)
                                                <input type="text" name="Right-q-front-hub1" value="{{json_decode($data['external_abnormal'],true)['Right-q-front-hub1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-q-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-front-tire">右前轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-front-tire" value="3" {{json_decode($data['external'],true)['Right-front-tire'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-front-tire" value="2" {{json_decode($data['external'],true)['Right-front-tire'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-front-tire" value="0" {{json_decode($data['external'],true)['Right-front-tire'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-front-tire" value="1" {{json_decode($data['external'],true)['Right-front-tire'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Right-front-tire'] == 1)
                                                <input type="text" name="Right-front-tire1" value="{{json_decode($data['external_abnormal'],true)['Right-front-tire1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-front-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-front-hub">右后轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-front-hub" value="3" {{json_decode($data['external'],true)['Right-front-hub'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-front-hub" value="2" {{json_decode($data['external'],true)['Right-front-hub'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-front-hub" value="0" {{json_decode($data['external'],true)['Right-front-hub'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-front-hub" value="1" {{json_decode($data['external'],true)['Right-front-hub'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Right-front-hub'] == 1)
                                                <input type="text" name="Right-front-hub1" value="{{json_decode($data['external_abnormal'],true)['Right-front-hub1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-front-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-rear-tire">右后轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-rear-tire" value="3" {{json_decode($data['external'],true)['Right-rear-tire'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-rear-tire" value="2" {{json_decode($data['external'],true)['Right-rear-tire'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-rear-tire" value="0" {{json_decode($data['external'],true)['Right-rear-tire'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-rear-tire" value="1" {{json_decode($data['external'],true)['Right-rear-tire'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Right-rear-tire'] == 1)
                                                <input type="text" name="Right-rear-tire1" value="{{json_decode($data['external_abnormal'],true)['Right-rear-tire1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-rear-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-windshield">后挡风玻璃</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-windshield" value="3" {{json_decode($data['external'],true)['Rear-windshield'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rear-windshield" value="2" {{json_decode($data['external'],true)['Rear-windshield'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rear-windshield" value="0" {{json_decode($data['external'],true)['Rear-windshield'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rear-windshield" value="1" {{json_decode($data['external'],true)['Rear-windshield'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rear-windshield'] == 1)
                                                <input type="text" name="Rear-windshield1" value="{{json_decode($data['external_abnormal'],true)['Rear-windshield1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rear-windshield1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Right-h-rear-hub">左后轮毂</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Right-rear-hub" value="3" {{json_decode($data['external'],true)['Right-rear-hub'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Right-rear-hub" value="2" {{json_decode($data['external'],true)['Right-rear-hub'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Right-rear-hub" value="0" {{json_decode($data['external'],true)['Right-rear-hub'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Right-rear-hub" value="1" {{json_decode($data['external'],true)['Right-rear-hub'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Right-rear-hub'] == 1)
                                                <input type="text" name="Right-rear-hub1" value="{{json_decode($data['external_abnormal'],true)['Right-rear-hub1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Right-rear-hub1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Left-rear-tire">左后轮胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Left-rear-tire" value="3" {{json_decode($data['external'],true)['Left-rear-tire'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Left-rear-tire" value="2" {{json_decode($data['external'],true)['Left-rear-tire'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Left-rear-tire" value="0" {{json_decode($data['external'],true)['Left-rear-tire'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Left-rear-tire" value="1" {{json_decode($data['external'],true)['Left-rear-tire'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Left-rear-tire'] == 1)
                                                <input type="text" name="Left-rear-tire1" value="{{json_decode($data['external_abnormal'],true)['Left-rear-tire1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Left-rear-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Panoramic-skylight">全景天窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Panoramic-skylight" value="3" {{json_decode($data['external'],true)['Panoramic-skylight'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Panoramic-skylight" value="2" {{json_decode($data['external'],true)['Panoramic-skylight'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Panoramic-skylight" value="0" {{json_decode($data['external'],true)['Panoramic-skylight'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Panoramic-skylight" value="1" {{json_decode($data['external'],true)['Panoramic-skylight'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Panoramic-skylight'] == 1)
                                                <input type="text" name="Panoramic-skylight1" value="{{json_decode($data['external_abnormal'],true)['Panoramic-skylight1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Panoramic-skylight1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Induction-wipers">感应雨刷</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Induction-wipers" value="3" {{json_decode($data['external'],true)['Induction-wipers'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Induction-wipers" value="2" {{json_decode($data['external'],true)['Induction-wipers'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Induction-wipers" value="0" {{json_decode($data['external'],true)['Induction-wipers'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Induction-wipers" value="1" {{json_decode($data['external'],true)['Induction-wipers'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Induction-wipers'] == 1)
                                                <input type="text" name="Induction-wipers1" value="{{json_decode($data['external_abnormal'],true)['Induction-wipers1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Induction-wipers1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="After-wipers">后雨刷</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="After-wipers" value="3" {{json_decode($data['external'],true)['After-wipers'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="After-wipers" value="2" {{json_decode($data['external'],true)['After-wipers'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="After-wipers" value="0" {{json_decode($data['external'],true)['After-wipers'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="After-wipers" value="1" {{json_decode($data['external'],true)['After-wipers'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['After-wipers'] == 1)
                                                <input type="text" name="After-wipers1" value="{{json_decode($data['external_abnormal'],true)['After-wipers1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="After-wipers1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-window">前电动车窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-window" value="3" {{json_decode($data['external'],true)['Front-window'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Front-window" value="2" {{json_decode($data['external'],true)['Front-window'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Front-window" value="0" {{json_decode($data['external'],true)['Front-window'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Front-window" value="1" {{json_decode($data['external'],true)['Front-window'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Front-window'] == 1)
                                                <input type="text" name="Front-window1" value="{{json_decode($data['external_abnormal'],true)['Front-window1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Front-window1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-windows">后电动车窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-windows" value="3" {{json_decode($data['external'],true)['Rear-windows'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rear-windows" value="2" {{json_decode($data['external'],true)['Rear-windows'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rear-windows" value="0" {{json_decode($data['external'],true)['Rear-windows'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rear-windows" value="1" {{json_decode($data['external'],true)['Rear-windows'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rear-windows'] == 1)
                                                <input type="text" name="Rear-windows1" value="{{json_decode($data['external_abnormal'],true)['Rear-windows1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rear-windows1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-mirror-adjustment">后视镜电动调节</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-mirror-adjustment" value="3" {{json_decode($data['external'],true)['Rearview-mirror-adjustment'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rearview-mirror-adjustment" value="2" {{json_decode($data['external'],true)['Rearview-mirror-adjustment'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rearview-mirror-adjustment" value="0" {{json_decode($data['external'],true)['Rearview-mirror-adjustment'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rearview-mirror-adjustment" value="1" {{json_decode($data['external'],true)['Rearview-mirror-adjustment'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rearview-mirror-adjustment'] == 1)
                                                <input type="text" name="Rearview-mirror-adjustment1" value="{{json_decode($data['external_abnormal'],true)['Rearview-mirror-adjustment1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rearview-mirror-adjustment1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-mirror-fold">后视镜电动折叠</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-mirror-fold" value="3" {{json_decode($data['external'],true)['Rearview-mirror-fold'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rearview-mirror-fold" value="2" {{json_decode($data['external'],true)['Rearview-mirror-fold'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rearview-mirror-fold" value="0" {{json_decode($data['external'],true)['Rearview-mirror-fold'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rearview-mirror-fold" value="1" {{json_decode($data['external'],true)['Rearview-mirror-fold'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rearview-mirror-fold'] == 1)
                                                <input type="text" name="Rearview-mirror-fold1" value="{{json_decode($data['external_abnormal'],true)['Rearview-mirror-fold1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rearview-mirror-fold1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rearview-heatingr">后视镜加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rearview-heatingr" value="3" {{json_decode($data['external'],true)['Rearview-heatingr'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rearview-heatingr" value="2" {{json_decode($data['external'],true)['Rearview-heatingr'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rearview-heatingr" value="0" {{json_decode($data['external'],true)['Rearview-heatingr'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rearview-heatingr" value="1" {{json_decode($data['external'],true)['Rearview-heatingr'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rearview-heatingr'] == 1)
                                                <input type="text" name="Rearview-heatingr1" value="{{json_decode($data['external_abnormal'],true)['Rearview-heatingr1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rearview-heatingr1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Electric-door"> 电动吸合门</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electric-door" value="3" {{json_decode($data['external'],true)['Electric-door'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Electric-door" value="2" {{json_decode($data['external'],true)['Electric-door'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Electric-door" value="0" {{json_decode($data['external'],true)['Electric-door'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Electric-door" value="1" {{json_decode($data['external'],true)['Electric-door'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Electric-door'] == 1)
                                                <input type="text" name="Electric-door1" value="{{json_decode($data['external_abnormal'],true)['Electric-door1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Electric-door1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Rear-side-sunshade">后排侧遮阳帘</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Rear-side-sunshade" value="3" {{json_decode($data['external'],true)['Rear-side-sunshade'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Rear-side-sunshade" value="2" {{json_decode($data['external'],true)['Rear-side-sunshade'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Rear-side-sunshade" value="0" {{json_decode($data['external'],true)['Rear-side-sunshade'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Rear-side-sunshade" value="1" {{json_decode($data['external'],true)['Rear-side-sunshade'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Rear-side-sunshade'] == 1)
                                                <input type="text" name="Rear-side-sunshade1" value="{{json_decode($data['external_abnormal'],true)['Rear-side-sunshade1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Rear-side-sunshade1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Induction">感应后备箱</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Induction" value="3" {{json_decode($data['external'],true)['Induction'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Induction" value="2" {{json_decode($data['external'],true)['Induction'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Induction" value="0" {{json_decode($data['external'],true)['Induction'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Induction" value="1" {{json_decode($data['external'],true)['Induction'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Induction'] == 1)
                                                <input type="text" name="Induction1" value="{{json_decode($data['external_abnormal'],true)['Induction1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Induction1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Electric-sunroof">电动天窗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Electric-sunroof" value="3" {{json_decode($data['external'],true)['Electric-sunroof'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Electric-sunroof" value="2" {{json_decode($data['external'],true)['Electric-sunroof'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Electric-sunroof" value="0" {{json_decode($data['external'],true)['Electric-sunroof'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Electric-sunroof" value="1" {{json_decode($data['external'],true)['Electric-sunroof'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['external'],true)['Electric-sunroof'] == 1)
                                                <input type="text" name="Electric-sunroof1" value="{{json_decode($data['external_abnormal'],true)['Electric-sunroof1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Electric-sunroof1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Leather-seat" value="3" {{json_decode($data['inside'],true)['Leather-seat'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Leather-seat" value="2" {{json_decode($data['inside'],true)['Leather-seat'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Leather-seat" value="0" {{json_decode($data['inside'],true)['Leather-seat'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Leather-seat" value="1" {{json_decode($data['inside'],true)['Leather-seat'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Leather-seat'] == 1)
                                                <input type="text" name="Leather-seat1" value="{{json_decode($data['inside_abnormal'],true)['Leather-seat1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Leather-seat1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="front-heated">前排座椅加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="front-heated" value="3" {{json_decode($data['inside'],true)['front-heated'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="front-heated" value="2" {{json_decode($data['inside'],true)['front-heated'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="front-heated" value="0" {{json_decode($data['inside'],true)['front-heated'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="front-heated" value="1" {{json_decode($data['inside'],true)['front-heated'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['front-heated'] == 1)
                                                <input type="text" name="front-heated1" value="{{json_decode($data['inside_abnormal'],true)['front-heated1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="front-heated1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Seat-ventilation">座椅通风</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Seat-ventilation" value="3" {{json_decode($data['inside'],true)['Seat-ventilation'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Seat-ventilation" value="2" {{json_decode($data['inside'],true)['Seat-ventilation'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Seat-ventilation" value="0" {{json_decode($data['inside'],true)['Seat-ventilation'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Seat-ventilation" value="1" {{json_decode($data['inside'],true)['Seat-ventilation'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Seat-ventilation'] == 1)
                                                <input type="text" name="Seat-ventilation1" value="{{json_decode($data['inside_abnormal'],true)['Seat-ventilation1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Seat-ventilation1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Driver-adjustment">驾驶座座椅电动调节</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Driver-adjustment" value="3" {{json_decode($data['inside'],true)['Driver-adjustment'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Driver-adjustment" value="2" {{json_decode($data['inside'],true)['Driver-adjustment'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Driver-adjustment" value="0" {{json_decode($data['inside'],true)['Driver-adjustment'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Driver-adjustment" value="1" {{json_decode($data['inside'],true)['Driver-adjustment'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Driver-adjustment'] == 1)
                                                <input type="text" name="Driver-adjustment1" value="{{json_decode($data['inside_abnormal'],true)['Driver-adjustment1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Driver-adjustment1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Multifunction-wheel">多功能方向盘</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Multifunction-wheel" value="3" {{json_decode($data['inside'],true)['Multifunction-wheel'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Multifunction-wheel" value="2" {{json_decode($data['inside'],true)['Multifunction-wheel'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Multifunction-wheel" value="0" {{json_decode($data['inside'],true)['Multifunction-wheel'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Multifunction-wheel" value="1" {{json_decode($data['inside'],true)['Multifunction-wheel'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Multifunction-wheel'] == 1)
                                                <input type="text" name="Multifunction-wheel1" value="{{json_decode($data['inside_abnormal'],true)['Multifunction-wheel1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Multifunction-wheel1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Cruise">定速巡航</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Cruise" value="3" {{json_decode($data['inside'],true)['Cruise'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Cruise" value="2" {{json_decode($data['inside'],true)['Cruise'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Cruise" value="0" {{json_decode($data['inside'],true)['Cruise'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Cruise" value="1" {{json_decode($data['inside'],true)['Cruise'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Cruise'] == 1)
                                                <input type="text" name="Cruise1" value="{{json_decode($data['inside_abnormal'],true)['Cruise1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Cruise1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="positioning-system">GPS导航</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="positioning-system" value="3" {{json_decode($data['inside'],true)['positioning-system'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="positioning-system" value="2" {{json_decode($data['inside'],true)['positioning-system'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="positioning-system" value="0" {{json_decode($data['inside'],true)['positioning-system'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="positioning-system" value="1" {{json_decode($data['inside'],true)['positioning-system'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['positioning-system'] == 1)
                                                <input type="text" name="positioning-system1" value="{{json_decode($data['inside_abnormal'],true)['positioning-system1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="positioning-system1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Reversing-radar">倒车雷达</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reversing-radar" value="3" {{json_decode($data['inside'],true)['Reversing-radar'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Reversing-radar" value="2" {{json_decode($data['inside'],true)['Reversing-radar'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Reversing-radar" value="0" {{json_decode($data['inside'],true)['Reversing-radar'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Reversing-radar" value="1" {{json_decode($data['inside'],true)['Reversing-radar'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Reversing-radar'] == 1)
                                                <input type="text" name="Reversing-radar1" value="{{json_decode($data['inside_abnormal'],true)['Reversing-radar1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Reversing-radar1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Reverse-image">倒车影像系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reverse-image" value="3" {{json_decode($data['inside'],true)['Reverse-image'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Reverse-image" value="2" {{json_decode($data['inside'],true)['Reverse-image'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Reverse-image" value="0" {{json_decode($data['inside'],true)['Reverse-image'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Reverse-image" value="1" {{json_decode($data['inside'],true)['Reverse-image'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Reverse-image'] == 1)
                                                <input type="text" name="Reverse-image1" value="{{json_decode($data['inside_abnormal'],true)['Reverse-image1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Reverse-image1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Manual-conditioning">手动空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Manual-conditioning" value="3" {{json_decode($data['inside'],true)['Manual-conditioning'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Manual-conditioning" value="2" {{json_decode($data['inside'],true)['Manual-conditioning'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Manual-conditioning" value="0" {{json_decode($data['inside'],true)['Manual-conditioning'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Manual-conditioning" value="1" {{json_decode($data['inside'],true)['Manual-conditioning'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Manual-conditioning'] == 1)
                                                <input type="text" name="Manual-conditioning1" value="{{json_decode($data['inside_abnormal'],true)['Manual-conditioning1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Manual-conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-conditioning">自动空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-conditioning" value="3" {{json_decode($data['inside'],true)['Automatic-conditioning'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Automatic-conditioning" value="2" {{json_decode($data['inside'],true)['Automatic-conditioning'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Automatic-conditioning" value="0" {{json_decode($data['inside'],true)['Automatic-conditioning'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Automatic-conditioning" value="1" {{json_decode($data['inside'],true)['Automatic-conditioning'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['Automatic-conditioning'] == 1)
                                                <input type="text" name="Automatic-conditioning1" value="{{json_decode($data['inside_abnormal'],true)['Automatic-conditioning1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Automatic-conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="HUD-display">HUD抬头显示</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="HUD-display" value="3" {{json_decode($data['inside'],true)['HUD-display'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="HUD-display" value="2" {{json_decode($data['inside'],true)['HUD-display'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="HUD-display" value="0" {{json_decode($data['inside'],true)['HUD-display'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="HUD-display" value="1" {{json_decode($data['inside'],true)['HUD-display'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['HUD-display'] == 1)
                                                <input type="text" name="HUD-display1" value="{{json_decode($data['inside_abnormal'],true)['HUD-display1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="HUD-display1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="conditioning">后排座椅加热</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="conditioning" value="3" {{json_decode($data['inside'],true)['conditioning'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="conditioning" value="2" {{json_decode($data['inside'],true)['conditioning'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="conditioning" value="0" {{json_decode($data['inside'],true)['conditioning'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="conditioning" value="1" {{json_decode($data['inside'],true)['conditioning'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['conditioning'] == 1)
                                                <input type="text" name="conditioning1" value="{{json_decode($data['inside_abnormal'],true)['conditioning1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="conditioning1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="air_conditioner">空调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="air_conditioner" value="3" {{json_decode($data['inside'],true)['air_conditioner'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="air_conditioner" value="2" {{json_decode($data['inside'],true)['air_conditioner'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="air_conditioner" value="0" {{json_decode($data['inside'],true)['air_conditioner'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="air_conditioner" value="1" {{json_decode($data['inside'],true)['air_conditioner'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['inside'],true)['air_conditioner'] == 1)
                                                <input type="text" name="air_conditioner1" value="{{json_decode($data['inside_abnormal'],true)['air_conditioner1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="air_conditioner1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Low-lights" value="3" {{json_decode($data['lamplight'],true)['Low-lights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Low-lights" value="2" {{json_decode($data['lamplight'],true)['Low-lights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Low-lights" value="0" {{json_decode($data['lamplight'],true)['Low-lights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Low-lights" value="1" {{json_decode($data['lamplight'],true)['Low-lights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Low-lights'] == 1)
                                                <input type="text" name="Low-lights1" value="{{json_decode($data['light_abnormal'],true)['Low-lights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Low-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="High-beam">远光灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="High-beam" value="3" {{json_decode($data['lamplight'],true)['High-beam'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="High-beam" value="2" {{json_decode($data['lamplight'],true)['High-beam'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="High-beam" value="0" {{json_decode($data['lamplight'],true)['High-beam'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="High-beam" value="1" {{json_decode($data['lamplight'],true)['High-beam'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['High-beam'] == 1)
                                                <input type="text" name="High-beam1" value="{{json_decode($data['light_abnormal'],true)['High-beam1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="High-beam1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Front-turn-signal">前转向灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Front-turn-signal" value="3" {{json_decode($data['lamplight'],true)['Front-turn-signal'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Front-turn-signal" value="2" {{json_decode($data['lamplight'],true)['Front-turn-signal'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Front-turn-signal" value="0" {{json_decode($data['lamplight'],true)['Front-turn-signal'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Front-turn-signal" value="1" {{json_decode($data['lamplight'],true)['Front-turn-signal'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Front-turn-signal'] == 1)
                                                <input type="text" name="Front-turn-signal1" value="{{json_decode($data['light_abnormal'],true)['Front-turn-signal1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Front-turn-signal1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-q-lightsr">前雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-q-lightsr" value="3" {{json_decode($data['lamplight'],true)['Fog-q-lightsr'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Fog-q-lightsr" value="2" {{json_decode($data['lamplight'],true)['Fog-q-lightsr'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Fog-q-lightsr" value="0" {{json_decode($data['lamplight'],true)['Fog-q-lightsr'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Fog-q-lightsr" value="1" {{json_decode($data['lamplight'],true)['Fog-q-lightsr'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Fog-q-lightsr'] == 1)
                                                <input type="text" name="Fog-q-lightsr1" value="{{json_decode($data['light_abnormal'],true)['Fog-q-lightsr1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Fog-q-lightsr1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="After-signal">后转向灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="After-signal" value="3" {{json_decode($data['lamplight'],true)['After-signal'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="After-signal" value="2" {{json_decode($data['lamplight'],true)['After-signal'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="After-signal" value="0" {{json_decode($data['lamplight'],true)['After-signal'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="After-signal" value="1" {{json_decode($data['lamplight'],true)['After-signal'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['After-signal'] == 1)
                                                <input type="text" name="After-signal1" value="{{json_decode($data['light_abnormal'],true)['After-signal1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="After-signal1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="brake-light">刹车灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="brake-light" value="3" {{json_decode($data['lamplight'],true)['brake-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="brake-light" value="2" {{json_decode($data['lamplight'],true)['brake-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="brake-light" value="0" {{json_decode($data['lamplight'],true)['brake-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="brake-light" value="1" {{json_decode($data['lamplight'],true)['brake-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['brake-light'] == 1)
                                                <input type="text" name="brake-light1" value="{{json_decode($data['light_abnormal'],true)['brake-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="brake-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Reversing-lights">倒车灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Reversing-lights" value="3" {{json_decode($data['lamplight'],true)['Reversing-lights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Reversing-lights" value="2" {{json_decode($data['lamplight'],true)['Reversing-lights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Reversing-lights" value="0" {{json_decode($data['lamplight'],true)['Reversing-lights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Reversing-lights" value="1" {{json_decode($data['lamplight'],true)['Reversing-lights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Reversing-lights'] == 1)
                                                <input type="text" name="Reversing-lights1" value="{{json_decode($data['light_abnormal'],true)['Reversing-lights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Reversing-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-h-lights">后雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-h-lights" value="3" {{json_decode($data['lamplight'],true)['Fog-h-lights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Fog-h-lights" value="2" {{json_decode($data['lamplight'],true)['Fog-h-lights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Fog-h-lights" value="0" {{json_decode($data['lamplight'],true)['Fog-h-lights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Fog-h-lights" value="1" {{json_decode($data['lamplight'],true)['Fog-h-lights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Fog-h-lights'] == 1)
                                                <input type="text" name="Fog-h-lights1" value="{{json_decode($data['light_abnormal'],true)['Fog-h-lights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Fog-h-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Indoor-light">室内顶灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Indoor-light" value="3" {{json_decode($data['lamplight'],true)['Indoor-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Indoor-light" value="2" {{json_decode($data['lamplight'],true)['Indoor-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Indoor-light" value="0" {{json_decode($data['lamplight'],true)['Indoor-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Indoor-light" value="1" {{json_decode($data['lamplight'],true)['Indoor-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Indoor-light'] == 1)
                                                <input type="text" name="Indoor-light1" value="{{json_decode($data['light_abnormal'],true)['Indoor-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Indoor-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Xenon-headlights">氙气大灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Xenon-headlights" value="3" {{json_decode($data['lamplight'],true)['Xenon-headlights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Xenon-headlights" value="2" {{json_decode($data['lamplight'],true)['Xenon-headlights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Xenon-headlights" value="0" {{json_decode($data['lamplight'],true)['Xenon-headlights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Xenon-headlights" value="1" {{json_decode($data['lamplight'],true)['Xenon-headlights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Xenon-headlights'] == 1)
                                                <input type="text" name="Xenon-headlights1" value="{{json_decode($data['light_abnormal'],true)['Xenon-headlights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Xenon-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="LED-headlights">LED大灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="LED-headlights" value="3" {{json_decode($data['lamplight'],true)['LED-headlights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="LED-headlights" value="2" {{json_decode($data['lamplight'],true)['LED-headlights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="LED-headlights" value="0" {{json_decode($data['lamplight'],true)['LED-headlights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="LED-headlights" value="1" {{json_decode($data['lamplight'],true)['LED-headlights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['LED-headlights'] == 1)
                                                <input type="text" name="LED-headlights1" value="{{json_decode($data['light_abnormal'],true)['LED-headlights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="LED-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-headlights">自动头灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-headlights" value="3" {{json_decode($data['lamplight'],true)['Automatic-headlights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Automatic-headlights" value="2" {{json_decode($data['lamplight'],true)['Automatic-headlights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Automatic-headlights" value="0" {{json_decode($data['lamplight'],true)['Automatic-headlights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Automatic-headlights" value="1" {{json_decode($data['lamplight'],true)['Automatic-headlights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Automatic-headlights'] == 1)
                                                <input type="text" name="Automatic-headlights1" value="{{json_decode($data['light_abnormal'],true)['Automatic-headlights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Automatic-headlights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Fog-q-lights">前雾灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fog-q-lights" value="3" {{json_decode($data['lamplight'],true)['Fog-q-lights'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Fog-q-lights" value="2" {{json_decode($data['lamplight'],true)['Fog-q-lights'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Fog-q-lights" value="0" {{json_decode($data['lamplight'],true)['Fog-q-lights'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Fog-q-lights" value="1" {{json_decode($data['lamplight'],true)['Fog-q-lights'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Fog-q-lights'] == 1)
                                                <input type="text" name="Fog-q-lights1" value="{{json_decode($data['light_abnormal'],true)['Fog-q-lights1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Fog-q-lights1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Headlight-adjustable">大灯高度可调</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Headlight-adjustable" value="3" {{json_decode($data['lamplight'],true)['Headlight-adjustable'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Headlight-adjustable" value="2" {{json_decode($data['lamplight'],true)['Headlight-adjustable'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Headlight-adjustable" value="0" {{json_decode($data['lamplight'],true)['Headlight-adjustable'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Headlight-adjustable" value="1" {{json_decode($data['lamplight'],true)['Headlight-adjustable'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Headlight-adjustable'] == 1)
                                                <input type="text" name="Headlight-adjustable1" value="{{json_decode($data['light_abnormal'],true)['Headlight-adjustable1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Headlight-adjustable1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                         <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Headlight">大灯清洗</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Headlight" value="3" {{json_decode($data['lamplight'],true)['Headlight'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Headlight" value="2" {{json_decode($data['lamplight'],true)['Headlight'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Headlight" value="0" {{json_decode($data['lamplight'],true)['Headlight'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Headlight" value="1" {{json_decode($data['lamplight'],true)['Headlight'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['lamplight'],true)['Headlight'] == 1)
                                                <input type="text" name="Headlight1" value="{{json_decode($data['light_abnormal'],true)['Headlight1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Headlight1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="departure-warning" value="3" {{json_decode($data['high_tech'],true)['departure-warning'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="departure-warning" value="2" {{json_decode($data['high_tech'],true)['departure-warning'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="departure-warning" value="0" {{json_decode($data['high_tech'],true)['departure-warning'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="departure-warning" value="1" {{json_decode($data['high_tech'],true)['departure-warning'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['high_tech'],true)['departure-warning'] == 1)
                                                <input type="text" name="departure-warning1" value="{{json_decode($data['ht_abnormal'],true)['departure-warning1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="departure-warning1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Automatic-parking">自动泊车</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Automatic-parking" value="3" {{json_decode($data['high_tech'],true)['Automatic-parking'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Automatic-parking" value="2" {{json_decode($data['high_tech'],true)['Automatic-parking'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Automatic-parking" value="0" {{json_decode($data['high_tech'],true)['Automatic-parking'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Automatic-parking" value="1" {{json_decode($data['high_tech'],true)['Automatic-parking'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['high_tech'],true)['Automatic-parking'] == 1)
                                                <input type="text" name="Automatic-parking1" value="{{json_decode($data['ht_abnormal'],true)['Automatic-parking1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Automatic-parking1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr><tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Blind-system">盲点辅助系统</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Blind-system" value="3" {{json_decode($data['high_tech'],true)['Blind-system'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Blind-system" value="2" {{json_decode($data['high_tech'],true)['Blind-system'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Blind-system" value="0" {{json_decode($data['high_tech'],true)['Blind-system'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Blind-system" value="1" {{json_decode($data['high_tech'],true)['Blind-system'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['high_tech'],true)['Blind-system'] == 1)
                                                <input type="text" name="Blind-system1" value="{{json_decode($data['ht_abnormal'],true)['Blind-system1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Blind-system1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Panoramic-camera">全景摄像头</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Panoramic-camera" value="3" {{json_decode($data['high_tech'],true)['Panoramic-camera'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Panoramic-camera" value="2" {{json_decode($data['high_tech'],true)['Panoramic-camera'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Panoramic-camera" value="0" {{json_decode($data['high_tech'],true)['Panoramic-camera'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Panoramic-camera" value="1" {{json_decode($data['high_tech'],true)['Panoramic-camera'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['high_tech'],true)['Panoramic-camera'] == 1)
                                                <input type="text" name="Panoramic-camera1" value="{{json_decode($data['ht_abnormal'],true)['Panoramic-camera1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Panoramic-camera1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">

                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-automatically">发动机自动启停</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-automatically" value="3" {{json_decode($data['high_tech'],true)['Engine-automatically'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-automatically" value="2" {{json_decode($data['high_tech'],true)['Engine-automatically'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-automatically" value="0" {{json_decode($data['high_tech'],true)['Engine-automatically'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-automatically" value="1" {{json_decode($data['high_tech'],true)['Engine-automatically'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['high_tech'],true)['Engine-automatically'] == 1)
                                                <input type="text" name="Engine-automatically1" value="{{json_decode($data['ht_abnormal'],true)['Engine-automatically1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-automatically1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="jack" value="3" {{json_decode($data['car_instrument'],true)['jack'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="jack" value="2" {{json_decode($data['car_instrument'],true)['jack'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="jack" value="0" {{json_decode($data['car_instrument'],true)['jack'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="jack" value="1" {{json_decode($data['car_instrument'],true)['jack'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['car_instrument'],true)['jack'] == 1)
                                                <input type="text" name="jack1" value="{{json_decode($data['ci_abnormal'],true)['jack1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="jack1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Fire-extinguisher">灭火器</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Fire-extinguisher" value="3" {{json_decode($data['car_instrument'],true)['Fire-extinguisher'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Fire-extinguisher" value="2" {{json_decode($data['car_instrument'],true)['Fire-extinguisher'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Fire-extinguisher" value="0" {{json_decode($data['car_instrument'],true)['Fire-extinguisher'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Fire-extinguisher" value="1" {{json_decode($data['car_instrument'],true)['Fire-extinguisher'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['car_instrument'],true)['Fire-extinguisher'] == 1)
                                                <input type="text" name="Fire-extinguisher1" value="{{json_decode($data['ci_abnormal'],true)['Fire-extinguisher1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Fire-extinguisher1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="warning-signs">三角警示标</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="warning-signs" value="3" {{json_decode($data['car_instrument'],true)['warning-signs'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="warning-signs" value="2" {{json_decode($data['car_instrument'],true)['warning-signs'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="warning-signs" value="0" {{json_decode($data['car_instrument'],true)['warning-signs'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="warning-signs" value="1" {{json_decode($data['car_instrument'],true)['warning-signs'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['car_instrument'],true)['warning-signs'] == 1)
                                                <input type="text" name="warning-signs1" value="{{json_decode($data['ci_abnormal'],true)['warning-signs1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="warning-signs1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Repair-kit">维修工具包</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Repair-kit" value="3" {{json_decode($data['car_instrument'],true)['Repair-kit'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Repair-kit" value="2" {{json_decode($data['car_instrument'],true)['Repair-kit'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Repair-kit" value="0" {{json_decode($data['car_instrument'],true)['Repair-kit'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Repair-kit" value="1" {{json_decode($data['car_instrument'],true)['Repair-kit'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['car_instrument'],true)['Repair-kit'] == 1)
                                                <input type="text" name="Repair-kit1" value="{{json_decode($data['ci_abnormal'],true)['Repair-kit1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Repair-kit1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Spare-tire">备胎</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Spare-tire" value="3" {{json_decode($data['car_instrument'],true)['Spare-tire'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Spare-tire" value="2" {{json_decode($data['car_instrument'],true)['Spare-tire'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Spare-tire" value="0" {{json_decode($data['car_instrument'],true)['Spare-tire'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Spare-tire" value="1" {{json_decode($data['car_instrument'],true)['Spare-tire'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['car_instrument'],true)['Spare-tire'] == 1)
                                                <input type="text" name="Spare-tire1" value="{{json_decode($data['ci_abnormal'],true)['Spare-tire1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Spare-tire1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Tune-car" value="3" {{json_decode($data['instrument_desk'],true)['Tune-car'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Tune-car" value="2" {{json_decode($data['instrument_desk'],true)['Tune-car'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Tune-car" value="0" {{json_decode($data['instrument_desk'],true)['Tune-car'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Tune-car" value="1" {{json_decode($data['instrument_desk'],true)['Tune-car'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Tune-car'] == 1)
                                                <input type="text" name="Tune-car1" value="{{json_decode($data['id_abnormal'],true)['Tune-car1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Tune-car1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Brake-indicator">制动系统指示灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Brake-indicator" value="3" {{json_decode($data['instrument_desk'],true)['Brake-indicator'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Brake-indicator" value="2" {{json_decode($data['instrument_desk'],true)['Brake-indicator'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Brake-indicator" value="0" {{json_decode($data['instrument_desk'],true)['Brake-indicator'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Brake-indicator" value="1" {{json_decode($data['instrument_desk'],true)['Brake-indicator'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Brake-indicator'] == 1)
                                                <input type="text" name="Brake-indicator1" value="{{json_decode($data['id_abnormal'],true)['Brake-indicator1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Brake-indicator1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Airbag-light">安全气囊故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Airbag-light" value="3" {{json_decode($data['instrument_desk'],true)['Airbag-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Airbag-light" value="2" {{json_decode($data['instrument_desk'],true)['Airbag-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Airbag-light" value="0" {{json_decode($data['instrument_desk'],true)['Airbag-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Airbag-light" value="1" {{json_decode($data['instrument_desk'],true)['Airbag-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Airbag-light'] == 1)
                                                <input type="text" name="Airbag-light1" value="{{json_decode($data['id_abnormal'],true)['Airbag-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Airbag-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Body-light">车身稳定系统故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Body-light" value="3" {{json_decode($data['instrument_desk'],true)['Body-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Body-light" value="2" {{json_decode($data['instrument_desk'],true)['Body-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Body-light" value="0" {{json_decode($data['instrument_desk'],true)['Body-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Body-light" value="1" {{json_decode($data['instrument_desk'],true)['Body-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Body-light'] == 1)
                                                <input type="text" name="Body-light1" value="{{json_decode($data['id_abnormal'],true)['Body-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Body-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-light">发动机故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Engine-light" value="3" {{json_decode($data['instrument_desk'],true)['Engine-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-light" value="2" {{json_decode($data['instrument_desk'],true)['Engine-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-light" value="0" {{json_decode($data['instrument_desk'],true)['Engine-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-light" value="1" {{json_decode($data['instrument_desk'],true)['Engine-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Engine-light'] == 1)
                                                <input type="text" name="Engine-light1" value="{{json_decode($data['id_abnormal'],true)['Engine-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Transmission-light">变速箱故障灯</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Transmission-light" value="3" {{json_decode($data['instrument_desk'],true)['Transmission-light'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Transmission-light" value="2" {{json_decode($data['instrument_desk'],true)['Transmission-light'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Transmission-light" value="0" {{json_decode($data['instrument_desk'],true)['Transmission-light'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Transmission-light" value="1" {{json_decode($data['instrument_desk'],true)['Transmission-light'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['instrument_desk'],true)['Transmission-light'] == 1)
                                                <input type="text" name="Transmission-light1" value="{{json_decode($data['id_abnormal'],true)['Transmission-light1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Transmission-light1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="start-up" value="3" {{json_decode($data['engine'],true)['start-up'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="start-up" value="2" {{json_decode($data['engine'],true)['start-up'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="start-up" value="0" {{json_decode($data['engine'],true)['start-up'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="start-up" value="1" {{json_decode($data['engine'],true)['start-up'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['engine'],true)['start-up'] == 1)
                                                <input type="text" name="start-up1" value="{{json_decode($data['engine_abnormal'],true)['start-up1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="start-up1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Idle-speed">怠速</label>
                                            </td>
                                            <td width="25%">
                                                <input type="radio" name="Idle-speed" value="3" {{json_decode($data['engine'],true)['Idle-speed'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Idle-speed" value="2" {{json_decode($data['engine'],true)['Idle-speed'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Idle-speed" value="0" {{json_decode($data['engine'],true)['Idle-speed'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Idle-speed" value="1" {{json_decode($data['engine'],true)['Idle-speed'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['engine'],true)['Idle-speed'] == 1)
                                                <input type="text" name="Idle-speed1" value="{{json_decode($data['engine_abnormal'],true)['Idle-speed1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Idle-speed1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td width="25%" style="text-align:center">
                                                <label for="Engine-shake">发动机抖动</label>
                                            </td>
                                            <td width="25%">
                                                <input type="radio" name="Engine-shake" value="3" {{json_decode($data['engine'],true)['Engine-shake'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Engine-shake" value="2" {{json_decode($data['engine'],true)['Engine-shake'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Engine-shake" value="0" {{json_decode($data['engine'],true)['Engine-shake'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Engine-shake" value="1" {{json_decode($data['engine'],true)['Engine-shake'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['engine'],true)['Engine-shake'] == 1)
                                                <input type="text" name="Engine-shake1" value="{{json_decode($data['engine_abnormal'],true)['1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Engine-shake1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="exhaust">尾气</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="exhaust" value="3" {{json_decode($data['engine'],true)['exhaust'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="exhaust" value="2" {{json_decode($data['engine'],true)['exhaust'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="exhaust" value="0" {{json_decode($data['engine'],true)['exhaust'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="exhaust" value="1" {{json_decode($data['engine'],true)['exhaust'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['engine'],true)['exhaust'] == 1)
                                                <input type="text" name="exhaust1" value="{{json_decode($data['engine_abnormal'],true)['exhaust1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="exhaust1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
                                                <input type="radio" name="Gearbox-gear" value="3" {{json_decode($data['gearbox'],true)['Gearbox-gear'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Gearbox-gear" value="2" {{json_decode($data['gearbox'],true)['Gearbox-gear'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Gearbox-gear" value="0" {{json_decode($data['gearbox'],true)['Gearbox-gear'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Gearbox-gear" value="1" {{json_decode($data['gearbox'],true)['Gearbox-gear'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['gearbox'],true)['Gearbox-gear'] == 1)
                                                <input type="text" name="Gearbox-gear1" value="{{json_decode($data['gearbox_abnormal'],true)['Gearbox-gear1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Gearbox-gear1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
                                            </td>
                                            <td width="25%" style="text-align:center">
                                                <label for="Turn">转向</label>
                                            </td>
                                            <td width="25%%">
                                                <input type="radio" name="Turn" value="3" {{json_decode($data['gearbox'],true)['Turn'] == 3? "checked" :"" }} onclick="return false"/>取消此项
                                                <input type="radio" name="Turn" value="2" {{json_decode($data['gearbox'],true)['Turn'] == 2? "checked" :"" }} onclick="return false"/>没有此项
                                                <input type="radio" name="Turn" value="0" {{json_decode($data['gearbox'],true)['Turn'] == 0? "checked" :"" }} onclick="return false"/>正常
                                                <input type="radio" name="Turn" value="1" {{json_decode($data['gearbox'],true)['Turn'] == 1? "checked" :"" }} onclick="return false"/>异常
                                                @if(json_decode($data['gearbox'],true)['Turn'] == 1)
                                                <input type="text" name="Turn1" value="{{json_decode($data['gearbox_abnormal'],true)['Turn1']}}" style="display:block" placeholder="请输入异常信息">
                                                @else
                                                <input type="text" name="Turn1" value="" style="display:none" placeholder="请输入异常信息">
                                                @endif
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
            </div>
        </div>
    </div>

</body>

</html>
@endsection
