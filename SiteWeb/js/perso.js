let listeValeur = [
"koi_score","koi_fpflag_nt","koi_fpflag_ss","koi_fpflag_co","koi_fpflag_ec","koi_period","koi_period_err1","koi_period_err2","koi_time0bk","koi_time0bk_err1","koi_time0bk_err2","koi_impact","koi_impact_err1","koi_impact_err2","koi_duration","koi_duration_err1","koi_duration_err2" ,"koi_depth","koi_depth_err1" ,"koi_depth_err2","koi_prad","koi_prad_err1","koi_prad_err2","koi_teq","koi_insol","koi_insol_err1","koi_insol_err2","koi_model_snr","koi_tce_plnt_num","koi_steff","koi_steff_err1","koi_steff_err2","koi_slogg","koi_slogg_err1","koi_slogg_err2","koi_srad","koi_srad_err1","koi_srad_err2","ra","dec","koi_kepmag"
]
let listeRemplissage1 = [
"0.99","0","0","0","0","9.488035","0.000116","-0.000116","170.538750","0.003520","-0.003520","0.146","0.305","-0.077","2.957500","0.059500","-0.059500","615.80","22.41","-15.75","1.24","0.34","-0.23","793","93.59","29.45","-17.65","35.8","1","5455","81","-81","4.467","0.064","-0.096","0.927","0.105","-0.061","0.105","-0.061","15.347"
]

let listeRemplissageMediane =  ['0.475', "1", "0", "0", "1" ,'7.698431197', '2.45e-05', '-2.45e-05', '136.0162', '0.0033', '-0.0033', '0.579', '0.186', '-0.195', '3.736', '0.116', '-0.116', '448.0', '18.4', '-18.4', '2.46', '0.47', '-0.32', '934.0', '180.14', '97.17', '-54.5', '27.4', '1.0', '5753.0', '156.0', '-158.0', '4.442', '0.071', '-0.121', '0.993', '0.232', '-0.111', '292.29459', '43.718182', '14.582']

let listeRemplissageMin = ['0.0',"0","1","1","0", '0.259819659', '1.1e-08', '-0.134', '120.5659254', '8.7e-06', '-0.569', '0.0', '0.0', '-18.33', '0.3028', '0.0', '-13.2', '4.5', '0.0', '-13700.0', '0.14', '0.0', '-11600.0', '92.0', '0.02', '0.0', '-5600031.33', '2.4', '1.0', '2661.0', '0.0', '-1762.0', '0.047', '0.0', '-0.777', '0.109', '0.0', '-103.825', '279.85608', '36.577381', '6.966']

let listeRemplissageMax = ['1.0', "1", "1", "1", "1", '1071.232624', '0.134', '-1.1e-08', '1472.522306', '0.569', '-8.7e-06', '25.224', '85.54', '0.0', '138.54', '13.2', '0.0', '922000.0', '13700.0', '0.0', '26042.9', '9460.0', '0.0', '14667.0', '10947554.55', '3617132.59', '0.0', '9054.7', '8.0', '15896.0', '676.0', '0.0', '5.364', '1.472', '0.0', '180.013', '33.091', '0.0', '301.72076', '52.33601', '19.065']

let listeRemplissageValeurCandidat = [ "1",'0','0','0','0','4.959319244','5.15E-07','-5.15E-07','172.2585292','8.27E-05','-8.27E-05','0.831','0.016','-0.004','2.22739','0.0075','-0.0075','9.80E+03','2.00E+01','-2.00E+01','12.21','1.96E+00','-1.46E+00','1103','349.4','146.52','-93.21','696.5','1','5712','77','-77','4.359','0.11','-0.11','1.082','0.173','-0.13','292.16705','48.727589','15.263']

let listeRemplissage = [listeRemplissage1, listeRemplissageMediane, listeRemplissageMin, listeRemplissageMax, listeRemplissageValeurCandidat]


function remplirChamps(type = 1) {
    for (let i = 0; i < listeValeur.length; i++) {
        document.getElementById(listeValeur[i]).value = listeRemplissage[type][i];
    }   
}