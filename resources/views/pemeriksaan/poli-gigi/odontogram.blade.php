@extends('layouts.app')

@section('title', 'Odontogram - SIPKES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/odontogram.css') }}">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1>Odontogram</h1>
                        <button type="button" class="btn btn-primary text-white fw-bold">Riwayat Odontogram</button>
                    </div>

                    <div class="odontogram-chart mb-4">
                        <div class="d-flex justify-content-center">
                            <div class="quadrant upper-right">
                                <div class="tooth-row">
                                    <div class="tooth tooth-18" data-tooth="18">
                                        <div class="tooth-number">18</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 18" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-17" data-tooth="17">
                                        <div class="tooth-number">17</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 17" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-16" data-tooth="16">
                                        <div class="tooth-number">16</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 16" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-15" data-tooth="15">
                                        <div class="tooth-number">15</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 15" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-14" data-tooth="14">
                                        <div class="tooth-number">14</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 14" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-13" data-tooth="13">
                                        <div class="tooth-number">13</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 13" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-12" data-tooth="12">
                                        <div class="tooth-number">12</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 12" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-11" data-tooth="11">
                                        <div class="tooth-number">11</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 11" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="quadrant upper-left">
                                <div class="tooth-row">
                                    <div class="tooth tooth-21" data-tooth="21">
                                        <div class="tooth-number">21</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 21" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-22" data-tooth="22">
                                        <div class="tooth-number">22</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 22" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-23" data-tooth="23">
                                        <div class="tooth-number">23</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 23" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-24" data-tooth="24">
                                        <div class="tooth-number">24</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 24" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-25" data-tooth="25">
                                        <div class="tooth-number">25</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 25" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-26" data-tooth="26">
                                        <div class="tooth-number">26</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 26" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-27" data-tooth="27">
                                        <div class="tooth-number">27</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 27" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-28" data-tooth="28">
                                        <div class="tooth-number">28</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 28" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quadrant primary-upper">
                            <div class="d-flex justify-content-center gap-2">
                                <div class="d-flex tooth-row">
                                    <div class="tooth tooth-55" data-tooth="55">
                                        <div class="tooth-number">55</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 55" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-54" data-tooth="54">
                                        <div class="tooth-number">54</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 54" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-53" data-tooth="53">
                                        <div class="tooth-number">53</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 53" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-52" data-tooth="52">
                                        <div class="tooth-number">52</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 52" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-51" data-tooth="51">
                                        <div class="tooth-number">51</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 51" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex tooth-row">
                                    <div class="tooth tooth-61" data-tooth="61">
                                        <div class="tooth-number">61</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 61" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-62" data-tooth="62">
                                        <div class="tooth-number">62</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 62" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-63" data-tooth="63">
                                        <div class="tooth-number">63</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 63" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-64" data-tooth="64">
                                        <div class="tooth-number">64</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 64" width="60" height="60">
                                        </div>
                                    </div>
                                    <div class="tooth tooth-65" data-tooth="65">
                                        <div class="tooth-number">65</div>
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 65" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quadrant primary-lower">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex tooth-row">
                                    <div class="tooth tooth-85" data-tooth="85">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 85" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">85</div>
                                    </div>
                                    <div class="tooth tooth-84" data-tooth="84">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 84" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">84</div>
                                    </div>
                                    <div class="tooth tooth-83" data-tooth="83">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 83" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">83</div>
                                    </div>
                                    <div class="tooth tooth-82" data-tooth="82">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 82" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">82</div>
                                    </div>
                                    <div class="tooth tooth-81" data-tooth="81">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 81" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">81</div>
                                    </div>
                                </div>
                                <div class="d-flex tooth-row">
                                    <div class="tooth tooth-71" data-tooth="71">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 71" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">71</div>
                                    </div>
                                    <div class="tooth tooth-72" data-tooth="72">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 72" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">72</div>
                                    </div>
                                    <div class="tooth tooth-73" data-tooth="73">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 73" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">73</div>
                                    </div>
                                    <!-- Tooth 74 - vector-1 -->
                                    <div class="tooth tooth-74" data-tooth="74">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 74" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">74</div>
                                    </div>
                                    <!-- Tooth 75 - vector-1 -->
                                    <div class="tooth tooth-75" data-tooth="75">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 75" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">75</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="quadrant lower-right">
                                <div class="tooth-row">
                                    <div class="tooth tooth-48" data-tooth="48">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 48" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">48</div>
                                    </div>
                                    <div class="tooth tooth-47" data-tooth="47">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 47" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">47</div>
                                    </div>
                                    <div class="tooth tooth-46" data-tooth="46">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 46" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">46</div>
                                    </div>
                                    <div class="tooth tooth-45" data-tooth="45">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 45" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">45</div>
                                    </div>
                                    <div class="tooth tooth-44" data-tooth="44">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 44" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">44</div>
                                    </div>
                                    <div class="tooth tooth-43" data-tooth="43">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 43" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">43</div>
                                    </div>
                                    <div class="tooth tooth-42" data-tooth="42">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 42" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">42</div>
                                    </div>
                                    <div class="tooth tooth-41" data-tooth="41">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 41" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">41</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="quadrant lower-left">
                                <div class="tooth-row">
                                    <div class="tooth tooth-31" data-tooth="31">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 31" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">31</div>
                                    </div>
                                    <div class="tooth tooth-32" data-tooth="32">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 32" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">32</div>
                                    </div>
                                    <div class="tooth tooth-33" data-tooth="33">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-2.jpg') }}" alt="Tooth 33" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">33</div>
                                    </div>
                                    <div class="tooth tooth-34" data-tooth="34">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 34" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">34</div>
                                    </div>
                                    <div class="tooth tooth-35" data-tooth="35">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 35" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">35</div>
                                    </div>
                                    <div class="tooth tooth-36" data-tooth="36">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 36" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">36</div>
                                    </div>
                                    <div class="tooth tooth-37" data-tooth="37">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 37" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">37</div>
                                    </div>
                                    <div class="tooth tooth-38" data-tooth="38">
                                        <div class="tooth-shape">
                                            <img src="{{ asset('images/odontogram/vector-1.jpg') }}" alt="Tooth 38" width="60" height="60">
                                        </div>
                                        <div class="tooth-number">38</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="legend-section mb-4">
                        <div class="legend-container">
                            <div class="legend-item" data-condition="sou">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                    </svg>
                                </div>
                                <div class="legend-label">sou</div>
                            </div>
                            <div class="legend-item" data-condition="non">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">NON</text>
                                    </svg>
                                </div>
                                <div class="legend-label">non</div>
                            </div>
                            <div class="legend-item" data-condition="une">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">UNE</text>
                                    </svg>
                                </div>
                                <div class="legend-label">une</div>
                            </div>
                            <div class="legend-item" data-condition="pre">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">PRE</text>
                                    </svg>
                                </div>
                                <div class="legend-label">pre</div>
                            </div>
                            <div class="legend-item" data-condition="ano">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">ANO</text>
                                    </svg>
                                </div>
                                <div class="legend-label">ano</div>
                            </div>
                            <div class="legend-item" data-condition="ipx">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">IPX</text>
                                    </svg>
                                </div>
                                <div class="legend-label">ipx</div>
                            </div>
                            <div class="legend-item" data-condition="prd">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">PRD</text>
                                    </svg>
                                </div>
                                <div class="legend-label">prd</div>
                            </div>
                            <div class="legend-item" data-condition="fld">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <text x="15" y="18" font-size="8" text-anchor="middle">FLD</text>
                                    </svg>
                                </div>
                                <div class="legend-label">fld</div>
                            </div>
                            <div class="legend-item" data-condition="car">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <circle cx="15" cy="15" r="6" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">car</div>
                            </div>
                            <div class="legend-item" data-condition="cfr">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <path d="M10,10 L15,15 L20,10 M10,20 L15,15 L20,20" stroke="black"
                                            stroke-width="2" fill="none" />
                                    </svg>
                                </div>
                                <div class="legend-label">cfr</div>
                            </div>
                            <div class="legend-item" data-condition="rrx">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <path d="M10,10 L20,20 M20,10 L10,20" stroke="black" stroke-width="2"
                                            fill="none" />
                                    </svg>
                                </div>
                                <div class="legend-label">rrx</div>
                            </div>
                            <div class="legend-item" data-condition="mis">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <path d="M10,10 L20,20 M20,10 L10,20" stroke="red" stroke-width="2"
                                            fill="none" />
                                    </svg>
                                </div>
                                <div class="legend-label">mis</div>
                            </div>
                            <div class="legend-item" data-condition="nvt">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <polygon points="15,10 10,20 20,20" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">nvt</div>
                            </div>
                            <div class="legend-item" data-condition="rct">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <polygon points="15,10 10,20 20,20" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">rct</div>
                            </div>
                            <div class="legend-item" data-condition="amf">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">amf</div>
                            </div>
                            <div class="legend-item" data-condition="cof">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">cof</div>
                            </div>
                            <div class="legend-item" data-condition="fis">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <line x1="8" y1="8" x2="18" y2="18"
                                            stroke="black" stroke-width="1" />
                                        <line x1="8" y1="18" x2="18" y2="8"
                                            stroke="black" stroke-width="1" />
                                    </svg>
                                </div>
                                <div class="legend-label">fis</div>
                            </div>
                            <div class="legend-item" data-condition="fmc">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">fmc</div>
                            </div>
                            <div class="legend-item" data-condition="poc">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">poc</div>
                            </div>
                            <div class="legend-item" data-condition="gmc">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">gmc</div>
                            </div>
                            <div class="legend-item" data-condition="meb">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="red" />
                                    </svg>
                                </div>
                                <div class="legend-label">meb</div>
                            </div>
                            <div class="legend-item" data-condition="pob">
                                <div class="legend-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30">
                                        <rect x="5" y="5" width="20" height="20" fill="white" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="8" y="8" width="14" height="14" fill="black" />
                                    </svg>
                                </div>
                                <div class="legend-label">pob</div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Fields -->
                    <form action="#" method="POST">
                        @csrf

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="occlusi" class="form-label">Occlusi:</label>
                                    <select class="form-select" id="occlusi">
                                        <option value="">Pilih Occlusi</option>
                                        <option value="normal">Normal</option>
                                        <option value="overbite">Overbite</option>
                                        <option value="underbite">Underbite</option>
                                        <option value="crossbite">Crossbite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="torus_palatinus" class="form-label">Torus Palatinus:</label>
                                    <select class="form-select" id="torus_palatinus">
                                        <option value="">Pilih Torus Palatinus</option>
                                        <option value="tidak_ada">Tidak Ada</option>
                                        <option value="kecil">Kecil</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="besar">Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="torus_mandibularis" class="form-label">Torus Mandibularis:</label>
                                    <select class="form-select" id="torus_mandibularis">
                                        <option value="">Pilih Torus Mandibularis</option>
                                        <option value="tidak_ada">Tidak Ada</option>
                                        <option value="kecil">Kecil</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="besar">Besar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="palatum" class="form-label">Palatum:</label>
                                    <select class="form-select" id="palatum">
                                        <option value="">Pilih Palatum</option>
                                        <option value="normal">Normal</option>
                                        <option value="tinggi">Tinggi</option>
                                        <option value="rendah">Rendah</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="diastema" class="form-label">Diastema:</label>
                                    <select class="form-select" id="diastema">
                                        <option value="">Pilih Diastema</option>
                                        <option value="tidak_ada">Tidak Ada</option>
                                        <option value="kecil">Kecil</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="besar">Besar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="lokasi_lebar" class="form-label">Lokasi dan Lebar:</label>
                                    <input type="text" class="form-control" id="lokasi_lebar"
                                        placeholder="Masukkan lokasi dan lebar">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="anomali" class="form-label">Anomali:</label>
                                    <select class="form-select" id="anomali">
                                        <option value="">Pilih Anomali</option>
                                        <option value="tidak_ada">Tidak Ada</option>
                                        <option value="kongenital">Kongenital</option>
                                        <option value="trauma">Trauma</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nomor_gigi_bentuk" class="form-label">Nomor Gigi dan Bentuk:</label>
                                    <input type="text" class="form-control" id="nomor_gigi_bentuk"
                                        placeholder="Masukkan nomor gigi dan bentuk">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="lain_lain" class="form-label">Lain-lain:</label>
                                    <textarea class="form-control" id="lain_lain" rows="3" placeholder="Masukkan informasi lainnya"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="d" class="form-label">D:</label>
                                    <input type="text" class="form-control" id="d"
                                        placeholder="Masukkan nilai D">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m" class="form-label">M:</label>
                                    <input type="text" class="form-control" id="m"
                                        placeholder="Masukkan nilai M">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f" class="form-label">F:</label>
                                    <input type="text" class="form-control" id="f"
                                        placeholder="Masukkan nilai F">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jumlah_foto" class="form-label">Jumlah Foto:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" class="form-control" id="jumlah_foto"
                                            placeholder="Jumlah">
                                        <select class="form-select" id="jenis_foto">
                                            <option value="">Pilih Jenis</option>
                                            <option value="intraoral">Intraoral</option>
                                            <option value="ekstraoral">Ekstraoral</option>
                                            <option value="panoramik">Panoramik</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jumlah_rontgen" class="form-label">Jumlah Rontgen:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" class="form-control" id="jumlah_rontgen"
                                            placeholder="Jumlah">
                                        <select class="form-select" id="jenis_rontgen">
                                            <option value="">Pilih Jenis</option>
                                            <option value="periapikal">Periapikal</option>
                                            <option value="bitewing">Bitewing</option>
                                            <option value="panoramik">Panoramik</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-secondary me-2">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tooth selection functionality
            const teeth = document.querySelectorAll('.tooth');
            let selectedTooth = null;
            let selectedCondition = null;

            teeth.forEach(tooth => {
                tooth.addEventListener('click', function() {
                    if (selectedTooth) {
                        selectedTooth.classList.remove('selected');
                    }
                    selectedTooth = this;
                    selectedTooth.classList.add('selected');
                    console.log('Selected tooth:', selectedTooth.dataset.tooth);
                });
            });

            // Legend condition selection
            const legendItems = document.querySelectorAll('.legend-item');
            legendItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (selectedCondition) {
                        selectedCondition.classList.remove('selected');
                    }
                    selectedCondition = this;
                    selectedCondition.classList.add('selected');
                    console.log('Selected condition:', selectedCondition.dataset.condition);

                    // Apply condition to selected tooth
                    if (selectedTooth) {
                        selectedTooth.dataset.condition = selectedCondition.dataset.condition;
                        applyConditionToTooth(selectedTooth, selectedCondition.dataset.condition);
                    }
                });
            });

            function applyConditionToTooth(toothElement, condition) {
                // Since we're now using images instead of SVG, we'll add a condition overlay
                // We'll create a div overlay on top of the image
                const toothShape = toothElement.querySelector('.tooth-shape');
                
                // Remove any existing condition overlays
                toothShape.querySelectorAll('.condition-overlay').forEach(el => el.remove());
                
                // Create new condition overlay
                const overlay = document.createElement('div');
                overlay.className = 'condition-overlay';
                overlay.style.position = 'absolute';
                overlay.style.top = '0';
                overlay.style.left = '0';
                overlay.style.width = '100%';
                overlay.style.height = '100%';
                overlay.style.display = 'flex';
                overlay.style.alignItems = 'center';
                overlay.style.justifyContent = 'center';
                overlay.style.pointerEvents = 'none';
                
                // Set position relative on tooth shape
                toothShape.style.position = 'relative';
                
                switch (condition) {
                    case 'sou':
                        // Sound tooth - no overlay needed
                        return;
                    case 'non':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">NON</span>';
                        break;
                    case 'une':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">UNE</span>';
                        break;
                    case 'pre':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">PRE</span>';
                        break;
                    case 'ano':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">ANO</span>';
                        break;
                    case 'ipx':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">IPX</span>';
                        break;
                    case 'prd':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">PRD</span>';
                        break;
                    case 'fld':
                        overlay.innerHTML = '<span style="font-size: 8px; font-weight: bold;">FLD</span>';
                        break;
                    case 'car':
                        overlay.innerHTML = '<div style="width: 12px; height: 12px; border-radius: 50%; background-color: black;"></div>';
                        break;
                    case 'cfr':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><path d="M10,10 L20,20 L30,10 M10,30 L20,20 L30,30" stroke="black" stroke-width="2" fill="none" /></svg>';
                        break;
                    case 'rrx':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30" stroke="black" stroke-width="2" fill="none" /></svg>';
                        break;
                    case 'mis':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30" stroke="red" stroke-width="2" fill="none" /></svg>';
                        break;
                    case 'nvt':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><polygon points="20,10 10,30 30,30" fill="black" /></svg>';
                        break;
                    case 'rct':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><polygon points="20,10 10,30 30,30" fill="black" /></svg>';
                        break;
                    case 'amf':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                    case 'cof':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                    case 'fis':
                        overlay.innerHTML = '<svg width="40" height="40" viewBox="0 0 40 40"><line x1="10" y1="10" x2="30" y2="30" stroke="black" stroke-width="1" /><line x1="10" y1="30" x2="30" y2="10" stroke="black" stroke-width="1" /></svg>';
                        break;
                    case 'fmc':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                    case 'poc':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                    case 'gmc':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                    case 'meb':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: red;"></div>';
                        break;
                    case 'pob':
                        overlay.innerHTML = '<div style="width: 16px; height: 16px; background-color: black;"></div>';
                        break;
                }
                
                toothShape.appendChild(overlay);
            }

            // Initialize tooth selection
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    if (selectedTooth) {
                        selectedTooth.classList.remove('selected');
                        selectedTooth = null;
                    }
                    if (selectedCondition) {
                        selectedCondition.classList.remove('selected');
                        selectedCondition = null;
                    }
                }
            });
        });
    </script>
@endsection