<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parcel')->insert([
            [
                'station_id' => 1,
                'name' => 'Parcelle Hangard',
                'latitude' => 41.77167421493391,
                'longitude' => 8.897960390741197,
                'surface_ha' => 0.78,
                'perimeters_m' => 340.63,
                'polygon_coordinates' => '[[8.897428693191399,41.77155973103554],[8.897552027223506,41.77166775306362],[8.897562751921955,41.77181978375792],[8.897600288366508,41.77195981171021],[8.897723622398615,41.77199981964043],[8.897852318779966,41.77195581091582],[8.89807217509808,41.77199581884853],[8.898168697384042,41.771987817264],[8.898265219670046,41.77193580694009],[8.898592322972611,41.77161574248021],[8.898554786528058,41.771123640257805],[8.898388553702153,41.77094760277369],[8.897723622398615,41.771195655453],[8.897428693191399,41.77155973103554]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 3,
                'name' => 'Parcelle Les épinvaux',
                'latitude' => 48.25168524722653,
                'longitude' => 4.704887549220954,
                'surface_ha' => 1.63,
                'perimeters_m' => 606.9,
                'polygon_coordinates' => '[[4.7050467229719,48.252766011459585],[4.704361051429356,48.251844459559635],[4.703836084154585,48.25077286669894],[4.704232488015121,48.25058712165289],[4.705507408539554,48.251565847576124],[4.705368131507486,48.251673006210964],[4.705860957928679,48.25258741742758],[4.7050467229719,48.252766011459585]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 4,
                'name' => 'Parcelle Ferme d\'Ailly',
                'latitude' => 48.94501088044981,
                'longitude' => -0.09202376832353754,
                'surface_ha' => 14.47,
                'perimeters_m' => 1529.44,
                'polygon_coordinates' => '[[-0.09440219148677098,48.94684297772064],[-0.09431648254394799,48.94315060140658],[-0.08955963621749108,48.94306603997046],[-0.0898167630459401,48.94698390270153],[-0.09440219148677098,48.94684297772064]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 5,
                'name' => 'Parcelle Cazes Chardonnay',
                'latitude' => 43.11370995042309,
                'longitude' => 2.0987369405462424,
                'surface_ha' => 2.4,
                'perimeters_m' => 627.5,
                'polygon_coordinates' => '[[2.0981369779465013,43.11311210568625],[2.099283335056699,43.1128771418295],[2.0999582929814102,43.11415376791984],[2.0994226120888064,43.11424775161022],[2.0980405553858454,43.114662844516324],[2.0975798698181918,43.113206090976405],[2.0981369779465013,43.11311210568625]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 6,
                'name' => 'Parcelle BAGNIZEAU',
                'latitude' => 45.89925610546354,
                'longitude' => -0.317992398079407,
                'surface_ha' => 1.51,
                'perimeters_m' => 498.51,
                'polygon_coordinates' => '[[-0.31881734665404343,45.89985341914408],[-0.31898876453966946,45.89892011704808],[-0.31715673588692767,45.89865132313482],[-0.3170067452369874,45.899599562527186],[-0.31881734665404343,45.89985341914408]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 8,
                'name' => 'Parcelle BEAUNE',
                'latitude' => 47.03427287111529,
                'longitude' => 4.813458785097649,
                'surface_ha' => 0.2,
                'perimeters_m' => 178.98,
                'polygon_coordinates' => '[[4.8132936168224125,47.03441485287121],[4.813454321090225,47.03442216520491],[4.81364180940262,47.03442582137139],[4.81374894558115,47.03440388436876],[4.813566814077671,47.03389933081906],[4.813047203611816,47.03407117205645],[4.8132936168224125,47.03441485287121]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 11,
                'name' => 'Parcelle Barbé',
                'latitude' => 45.12265866196349,
                'longitude' => -0.6359658842753476,
                'surface_ha' => 0.63,
                'perimeters_m' => 373.4,
                'polygon_coordinates' => '[[-0.6367632835469373,45.12221418408233],[-0.6357026353795426,45.122024927935385],[-0.6353919404618292,45.12303176342289],[-0.6356276400545725,45.12308475427213],[-0.6357347762331013,45.122797089070296],[-0.6361740345650492,45.12285765028595],[-0.6363668796864009,45.12260026467543],[-0.6367632835469373,45.12221418408233]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 12,
                'name' => 'Parcelle BOIS DE TARSAC',
                'latitude' => 45.68045449744256,
                'longitude' => 0.03437960401495012,
                'surface_ha' => 0.72,
                'perimeters_m' => 402.86,
                'polygon_coordinates' => '[[0.033931579995680757,45.68122042777509],[0.033470894428027094,45.68077068399994],[0.03380696473461792,45.680366159874345],[0.03417988010539713,45.67995563341805],[0.03511993479659846,45.68045982827435],[0.03427003500948148,45.68109210998905],[0.033931579995680757,45.68122042777509]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 13,
                'name' => 'Parcelle CAMPLAZENS',
                'latitude' => 43.1933620668504,
                'longitude' => 3.1279924879682923,
                'surface_ha' => 5.21,
                'perimeters_m' => 920.61,
                'polygon_coordinates' => '[[3.12664257211889,43.19448450116642],[3.1292138404034606,43.19457836139652],[3.129235267639166,43.192200524404925],[3.1268782717116532,43.192184880433736],[3.12664257211889,43.19448450116642]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 14,
                'name' => 'Parcelle CANNET EUDéMIS',
                'latitude' => 43.612893351122466,
                'longitude' => -0.0683249017025558,
                'surface_ha' => 0.69,
                'perimeters_m' => 327.8,
                'polygon_coordinates' => '[[-0.06898271783869038,43.61250806534806],[-0.06800777861411868,43.61239931456877],[-0.06779350625708115,43.6130751197968],[-0.06807206032123593,43.613199404989025],[-0.06876844548165285,43.613284850909665],[-0.06898271783869038,43.61250806534806]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 15,
                'name' => 'Parcelle 1196-Floreal-Scorpioin',
                'latitude' => 43.727888054065815,
                'longitude' => 4.23457372137841,
                'surface_ha' => 2.54,
                'perimeters_m' => 784.23,
                'polygon_coordinates' => '[[4.234121606705027,43.72901843384841],[4.234528724183436,43.72828966237301],[4.234271597354967,43.72825865062418],[4.233757343698069,43.727777966464046],[4.233393080691071,43.726894117779764],[4.234935841661805,43.72680108031753],[4.234721569304788,43.72726626618378],[4.2355143770258605,43.72759189414063],[4.235707222147172,43.72780897846176],[4.234785851011904,43.72917349046511],[4.234121606705027,43.72901843384841]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 18,
                'name' => 'Parcelle GRAND EST',
                'latitude' => 48.477210180743164,
                'longitude' => 6.180052635517525,
                'surface_ha' => 6.88,
                'perimeters_m' => 1054.92,
                'polygon_coordinates' => '[[6.1801490580782,48.478796219711484],[6.177406371907983,48.47748757365479],[6.179934785721143,48.47566679254881],[6.182720326362771,48.47689013705756],[6.1801490580782,48.478796219711484]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 19,
                'name' => 'Parcelle Colombard',
                'latitude' => 45.56183888997271,
                'longitude' => -0.05189424082863476,
                'surface_ha' => 0.75,
                'perimeters_m' => 445.66,
                'polygon_coordinates' => '[[-0.05220685106643641,45.56142360317107],[-0.05191758338440878,45.5616489546976],[-0.05249611874844407,45.5626780485133],[-0.05205686041649616,45.56283579115463],[-0.05128458205689413,45.56158886104557],[-0.051359577381864266,45.561491208723936],[-0.05193811274589955,45.561205762502894],[-0.05220685106643641,45.56142360317107]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 21,
                'name' => 'Parcelle LE PUY-NOTRE-DAME',
                'latitude' => 47.13401262095892,
                'longitude' => -0.23219787893324306,
                'surface_ha' => 1.08,
                'perimeters_m' => 472.34,
                'polygon_coordinates' => '[[-0.23292181339669596,47.13336303872904],[-0.23215043291132892,47.13308568493889],[-0.23155047031158787,47.134377557375565],[-0.23180759714005686,47.1344213491116],[-0.23172188819723386,47.134654904428125],[-0.2323325644148078,47.13475708455655],[-0.2329003861609902,47.133428727572735],[-0.23292181339669596,47.13336303872904]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'station_id' => 22,
                'name' => 'Parcelle Mainx',
                'latitude' => 45.65699132834488,
                'longitude' => -0.1829541936833841,
                'surface_ha' => 2.56,
                'perimeters_m' => 778.43,
                'polygon_coordinates' => '[[-0.18534975863516714,45.65731528528782],[-0.18172855580107508,45.656130446323345],[-0.18130001108698005,45.656655378071555],[-0.18151428344401757,45.65688034731442],[-0.18487835944968056,45.65797518472724],[-0.18534975863516714,45.65731528528782]]',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
