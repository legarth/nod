{"filter":false,"title":"datafetch.php","tooltip":"/datafetch.php","undoManager":{"mark":100,"position":100,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":12},"end":{"row":4,"column":13}},"text":"N"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":13},"end":{"row":4,"column":14}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":14},"end":{"row":4,"column":15}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":15},"end":{"row":4,"column":16}},"text":"R"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":16},"end":{"row":4,"column":17}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":17},"end":{"row":4,"column":18}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":18},"end":{"row":4,"column":19}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":19},"end":{"row":4,"column":20}},"text":"F"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":20},"end":{"row":4,"column":21}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":21},"end":{"row":4,"column":22}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":22},"end":{"row":4,"column":23}},"text":"B"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":23},"end":{"row":4,"column":24}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":24},"end":{"row":4,"column":25}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":25},"end":{"row":4,"column":26}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":26},"end":{"row":4,"column":27}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":27},"end":{"row":4,"column":28}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":29},"end":{"row":4,"column":35}},"text":"$arg_1"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":30},"end":{"row":4,"column":35}},"text":"arg_1"},{"action":"insertText","range":{"start":{"row":4,"column":30},"end":{"row":4,"column":31}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":31},"end":{"row":4,"column":32}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":32},"end":{"row":4,"column":33}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":33},"end":{"row":4,"column":34}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":34},"end":{"row":4,"column":35}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":35},"end":{"row":4,"column":36}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":5},"end":{"row":6,"column":18}},"text":"branchranking"},{"action":"insertText","range":{"start":{"row":6,"column":5},"end":{"row":6,"column":6}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":6},"end":{"row":6,"column":7}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":7},"end":{"row":6,"column":8}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":8},"end":{"row":6,"column":9}},"text":"R"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":9},"end":{"row":6,"column":10}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":9},"end":{"row":6,"column":10}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":9},"end":{"row":6,"column":10}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":10},"end":{"row":6,"column":11}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":11},"end":{"row":6,"column":12}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":7,"column":3},"end":{"row":8,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":8,"column":0},"end":{"row":8,"column":3}},"text":"   "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":3},"end":{"row":9,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":9,"column":0},"end":{"row":9,"column":3}},"text":"   "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":3},"end":{"row":8,"column":38}},"text":"SELECT u.username, u.name, COUNT(*)"},{"action":"insertText","range":{"start":{"row":8,"column":38},"end":{"row":9,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":9,"column":0},"end":{"row":14,"column":0}},"lines":["FROM users u","INNER JOIN incoming i ON i.user = u.username","WHERE u.branch = 1","GROUP BY u.username, u.name","ORDER BY COUNT(*) DESC"]},{"action":"insertText","range":{"start":{"row":14,"column":0},"end":{"row":14,"column":7}},"text":"LIMIT 1"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":14,"column":7},"end":{"row":14,"column":9}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":14,"column":7},"end":{"row":14,"column":9}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":14,"column":7},"end":{"row":14,"column":9}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":14,"column":7},"end":{"row":14,"column":9}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":14,"column":7},"end":{"row":14,"column":9}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":2},"end":{"row":8,"column":3}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":14,"column":8},"end":{"row":14,"column":9}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":39},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":39},"end":{"row":8,"column":40}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":52},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":52},"end":{"row":8,"column":53}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":97},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":97},"end":{"row":8,"column":98}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":116},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":116},"end":{"row":8,"column":117}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":144},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":144},"end":{"row":8,"column":145}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":167},"end":{"row":9,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":167},"end":{"row":8,"column":168}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":3},"end":{"row":8,"column":4}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":2},"end":{"row":8,"column":175}},"text":"\"SELECT u.username, u.name, COUNT(*) FROM users u INNER JOIN incoming i ON i.user = u.username WHERE u.branch = 1 GROUP BY u.username, u.name ORDER BY COUNT(*) DESC LIMIT 1\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":24},"end":{"row":6,"column":253}},"text":"r.name, COUNT(*) as nods FROM incoming i INNER JOIN users u on i.user = u.username INNER JOIN branch br on u.branch = br.id INNER JOIN business bu on bu.id = br.businessid WHERE bu.id = 1 GROUP BY u.branch ORDER BY COUNT(*) DESC\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":23},"end":{"row":6,"column":24}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":22},"end":{"row":6,"column":23}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":21},"end":{"row":6,"column":22}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":20},"end":{"row":6,"column":21}},"text":"C"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":19},"end":{"row":6,"column":20}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":18},"end":{"row":6,"column":19}},"text":"L"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":17},"end":{"row":6,"column":18}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":16},"end":{"row":6,"column":17}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":15},"end":{"row":6,"column":16}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":15},"end":{"row":6,"column":188}},"text":"\"SELECT u.username, u.name, COUNT(*) FROM users u INNER JOIN incoming i ON i.user = u.username WHERE u.branch = 1 GROUP BY u.username, u.name ORDER BY COUNT(*) DESC LIMIT 1\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":127},"end":{"row":6,"column":128}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":128},"end":{"row":6,"column":129}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":127},"end":{"row":6,"column":128}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":130},"end":{"row":6,"column":131}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":131},"end":{"row":6,"column":132}},"text":"1"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":129},"end":{"row":6,"column":130}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":129},"end":{"row":6,"column":130}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":130},"end":{"row":6,"column":137}},"text":"$branch"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":9},"end":{"row":19,"column":10}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":10},"end":{"row":19,"column":11}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":11},"end":{"row":19,"column":12}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":19,"column":45},"end":{"row":19,"column":58}},"text":"branchranking"},{"action":"insertText","range":{"start":{"row":19,"column":45},"end":{"row":19,"column":52}},"text":"nodRank"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":25,"column":14},"end":{"row":25,"column":25}},"text":"rank_result"},{"action":"insertText","range":{"start":{"row":25,"column":14},"end":{"row":25,"column":28}},"text":"nodrank_result"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":27,"column":34},"end":{"row":27,"column":45}},"text":"rank_result"},{"action":"insertText","range":{"start":{"row":27,"column":34},"end":{"row":27,"column":48}},"text":"nodrank_result"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":33,"column":46},"end":{"row":33,"column":57}},"text":"rank_result"},{"action":"insertText","range":{"start":{"row":33,"column":46},"end":{"row":33,"column":60}},"text":"nodrank_result"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":46},"end":{"row":21,"column":57}},"text":"rank_result"},{"action":"insertText","range":{"start":{"row":21,"column":46},"end":{"row":21,"column":60}},"text":"nodrank_result"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":51},"end":{"row":6,"column":52}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":52},"end":{"row":6,"column":53}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":53},"end":{"row":6,"column":54}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":54},"end":{"row":6,"column":55}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":55},"end":{"row":6,"column":56}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":56},"end":{"row":6,"column":57}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":57},"end":{"row":6,"column":58}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":6,"column":58},"end":{"row":6,"column":59}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":57},"end":{"row":70,"column":58}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":70,"column":57},"end":{"row":70,"column":58}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":58},"end":{"row":70,"column":59}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":59},"end":{"row":70,"column":73}},"text":"align=\"center\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":66},"end":{"row":70,"column":67}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":70,"column":66},"end":{"row":70,"column":67}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":70,"column":65},"end":{"row":70,"column":66}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":65},"end":{"row":70,"column":66}},"text":"'"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":70,"column":72},"end":{"row":70,"column":73}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":70,"column":72},"end":{"row":70,"column":73}},"text":"'"}]}]]},"ace":{"folds":[],"scrolltop":804,"scrollleft":0,"selection":{"start":{"row":70,"column":73},"end":{"row":70,"column":73},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":49,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1411589874000,"hash":"62bb624577a8eadb5b14ec47b55185652354cc41"}