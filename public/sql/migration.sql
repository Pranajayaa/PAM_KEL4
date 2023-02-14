SELECT  DISTINCT
CASE
	WHEN AA.id_tersangka IS NOT NULL THEN AA.id_tersangka
	WHEN A.id_tersangka IS NOT NULL THEN A.id_tersangka
 END as id_tersangka,
A.id_kejati,
A.id_kejari,
A.id_cabjari,
B.file as upload_spdp,
D.file as upload_p16 ,
E.file as upload_p17 ,
F.file as upload_p18 ,
G.file as upload_p19 ,
H.file as upload_p20 ,
CC.file as upload_pengantar,
CL.file_upload as upload_checklist_berkas,
p24.file_upload as upload_p24,
I.file as upload_p21 ,
K.file_upload as upload_p16a ,
L.file_upload as upload_p31 ,
M.file_upload as upload_p46 ,
N.file_upload as upload_p47 ,
O.file_upload as upload_p48 ,
P.file_upload as upload_ba17
FROM pidum.ms_tersangka A
LEFT JOIN pidum.pdm_spdp B ON A.id_perkara = B.id_perkara and A.id_kejati||A.id_kejari||A.id_cabjari = B.id_kejati||B.id_kejari||B.id_cabjari
left JOIN pidum.pdm_berkas_tahap1 C on B.id_perkara = C.id_perkara and B.id_kejati||B.id_kejari||B.id_cabjari = C.id_kejati||C.id_kejari||C.id_cabjari
LEFT JOIN pidum.pdm_pengantar_tahap1 CC on C.id_berkas = CC.id_berkas AND CC.id_kejati||CC.id_kejari||CC.id_cabjari = C.id_kejati||C.id_kejari||C.id_cabjari
LEFT JOIN pidum.ms_tersangka_berkas AA ON AA.id_berkas = CC.id_berkas AND AA.id_pengantar = CC.id_pengantar AND CC.id_kejati||CC.id_kejari||CC.id_cabjari = AA.id_kejati||AA.id_kejari||AA.id_cabjari
LEFT JOIN pidum.pdm_ceklist_tahap1 CL ON CL.id_berkas = C.id_berkas AND CL.id_kejati||CL.id_kejari||CL.id_cabjari = C.id_kejati||C.id_kejari||C.id_cabjari
LEFT JOIN pidum.pdm_p24 p24 ON p24.id_berkas = C.id_berkas AND p24.id_kejati||p24.id_kejari||p24.id_cabjari = C.id_kejati||C.id_kejari||C.id_cabjari
left JOIN pidum.pdm_p16 D on D.id_perkara=B.id_perkara and D.id_kejati||D.id_kejari||D.id_cabjari = B.id_kejati||B.id_kejari||B.id_cabjari
left JOIN pidum.pdm_p17 E on E.id_perkara=B.id_perkara and E.id_kejati||E.id_kejari||E.id_cabjari = B.id_kejati||B.id_kejari||B.id_cabjari
left JOIN pidum.pdm_p18 F on C.id_berkas=F.id_berkas and C.id_kejati||C.id_kejari||C.id_cabjari = F.id_kejati||F.id_kejari||F.id_cabjari
left JOIN pidum.pdm_p19 G on C.id_berkas=G.id_berkas and C.id_kejati||C.id_kejari||C.id_cabjari = G.id_kejati||G.id_kejari||G.id_cabjari
left JOIN pidum.pdm_p20 H on C.id_berkas=H.id_berkas and C.id_kejati||C.id_kejari||C.id_cabjari = H.id_kejati||H.id_kejari||H.id_cabjari
left JOIN pidum.pdm_p21 I on C.id_berkas=I.id_berkas and C.id_kejati||C.id_kejari||C.id_cabjari = I.id_kejati||I.id_kejari||I.id_cabjari
left JOIN pidum.pdm_tahap_dua J on J.id_berkas = C.id_berkas and J.id_kejati||J.id_kejari||J.id_cabjari = C.id_kejati||C.id_kejari||C.id_cabjari
left JOIN pidum.pdm_p16a K on J.no_register_perkara=K.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = K.id_kejati||K.id_kejari||K.id_cabjari
left JOIN pidum.pdm_p31 L on J.no_register_perkara=L.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = L.id_kejati||L.id_kejari||L.id_cabjari
left JOIN pidum.pdm_p46 M on J.no_register_perkara=M.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = M.id_kejati||M.id_kejari||M.id_cabjari
left JOIN pidum.pdm_p47 N on J.no_register_perkara=N.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = N.id_kejati||N.id_kejari||N.id_cabjari
left JOIN pidum.pdm_p48 O on J.no_register_perkara=O.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = O.id_kejati||O.id_kejari||O.id_cabjari
left JOIN pidum.pdm_ba17 P on J.no_register_perkara=P.no_register_perkara and J.id_kejati||J.id_kejari||J.id_cabjari = P.id_kejati||P.id_kejari||P.id_cabjari
LIMIT 1