{"filter":false,"title":"datafetch.php","tooltip":"/datafetch.php","undoManager":{"mark":100,"position":100,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":20},"end":{"row":3,"column":53}},"text":"SELECT u.branch, COUNT(*) as nods"},{"action":"insertText","range":{"start":{"row":3,"column":53},"end":{"row":4,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":4,"column":0},"end":{"row":10,"column":0}},"lines":["FROM incoming i","INNER JOIN users u on i.user = u.username","INNER JOIN branch br on u.branch = br.id","INNER JOIN business bu on bu.id = br.businessid","WHERE bu.id = 1","GROUP BY u.branch"]},{"action":"insertText","range":{"start":{"row":10,"column":0},"end":{"row":10,"column":22}},"text":"ORDER BY COUNT(*) DESC"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":20},"end":{"row":3,"column":21}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":54},"end":{"row":4,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":54},"end":{"row":3,"column":55}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":70},"end":{"row":4,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":70},"end":{"row":3,"column":71}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":112},"end":{"row":4,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":112},"end":{"row":3,"column":113}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":47},"end":{"row":5,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":47},"end":{"row":4,"column":48}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":63},"end":{"row":5,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":63},"end":{"row":4,"column":64}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":81},"end":{"row":5,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":81},"end":{"row":4,"column":82}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":104},"end":{"row":4,"column":105}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":","}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":":"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":":"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":4,"column":105},"end":{"row":4,"column":106}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":41},"end":{"row":16,"column":101}},"text":"\"SELECT * FROM users where username='\". $explodedmsg[1] .\"'\""},{"action":"insertText","range":{"start":{"row":16,"column":41},"end":{"row":16,"column":55}},"text":"$branchranking"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":10},"end":{"row":16,"column":13}},"text":"ser"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":9},"end":{"row":16,"column":10}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":9},"end":{"row":16,"column":10}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":10},"end":{"row":16,"column":11}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":11},"end":{"row":16,"column":12}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":12},"end":{"row":16,"column":13}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":29},"end":{"row":3,"column":36}},"text":".branch"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":28},"end":{"row":3,"column":29}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":28},"end":{"row":3,"column":29}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":29},"end":{"row":3,"column":30}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":30},"end":{"row":3,"column":31}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":31},"end":{"row":3,"column":32}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":32},"end":{"row":3,"column":33}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":33},"end":{"row":3,"column":34}},"text":"m"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":34},"end":{"row":3,"column":35}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":57},"end":{"row":17,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":17,"column":0},"end":{"row":17,"column":8}},"text":"        "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":17,"column":8},"end":{"row":17,"column":53}},"text":" echo \"rows \". mysqli_num_rows($user_result);"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":17,"column":9},"end":{"row":18,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":18,"column":0},"end":{"row":18,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":18,"column":40},"end":{"row":18,"column":51}},"text":"user_result"},{"action":"insertText","range":{"start":{"row":18,"column":40},"end":{"row":18,"column":51}},"text":"rank_result"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":18,"column":19},"end":{"row":18,"column":20}},"text":"D"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":18,"column":20},"end":{"row":18,"column":21}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":18,"column":21},"end":{"row":18,"column":22}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":18,"column":22},"end":{"row":18,"column":23}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":15,"column":5},"end":{"row":16,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":16,"column":0},"end":{"row":16,"column":8}},"text":"        "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":8},"end":{"row":16,"column":9}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":9},"end":{"row":16,"column":10}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":10},"end":{"row":16,"column":11}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":11},"end":{"row":16,"column":12}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":11},"end":{"row":16,"column":12}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":10},"end":{"row":16,"column":11}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":10},"end":{"row":16,"column":11}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":11},"end":{"row":16,"column":12}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":12},"end":{"row":16,"column":13}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":12},"end":{"row":16,"column":13}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":12},"end":{"row":16,"column":14}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":12},"end":{"row":16,"column":13}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":14},"end":{"row":16,"column":15}},"text":"f"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":15},"end":{"row":16,"column":16}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":16},"end":{"row":16,"column":17}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":17},"end":{"row":16,"column":18}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":18},"end":{"row":16,"column":19}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":19},"end":{"row":16,"column":20}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":20},"end":{"row":16,"column":21}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":21},"end":{"row":16,"column":22}},"text":"g"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":23},"end":{"row":16,"column":24}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":57},"end":{"row":20,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":20,"column":0},"end":{"row":20,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":20,"column":9},"end":{"row":21,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":21,"column":0},"end":{"row":21,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":21,"column":9},"end":{"row":21,"column":34}},"text":"        if(!$user_result)"},{"action":"insertText","range":{"start":{"row":21,"column":34},"end":{"row":22,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":22,"column":0},"end":{"row":26,"column":0}},"lines":["            echo \"Database error<p>\";","        else if(!mysqli_num_rows($user_result))","            echo \"User not found<p>\";","        else"]},{"action":"insertText","range":{"start":{"row":26,"column":0},"end":{"row":26,"column":9}},"text":"        {"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":12},"end":{"row":21,"column":16}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":8},"end":{"row":21,"column":12}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":26,"column":9},"end":{"row":27,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":12}},"text":"            "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":11},"end":{"row":27,"column":13}},"text":"} "},{"action":"removeText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":11}},"text":"           "},{"action":"insertText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":8}},"text":"        "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":21,"column":8},"end":{"row":21,"column":12}},"text":"    "},{"action":"removeText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":11}},"text":"        }  "},{"action":"removeText","range":{"start":{"row":26,"column":9},"end":{"row":27,"column":0}},"text":"\n"},{"action":"removeText","range":{"start":{"row":21,"column":9},"end":{"row":21,"column":13}},"text":"    "},{"action":"insertText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":11}},"text":"        }  "},{"action":"insertText","range":{"start":{"row":27,"column":11},"end":{"row":28,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":26,"column":9},"end":{"row":27,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":27,"column":0},"end":{"row":27,"column":12}},"text":"            "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":14},"end":{"row":21,"column":25}},"text":"user_result"},{"action":"insertText","range":{"start":{"row":21,"column":14},"end":{"row":21,"column":25}},"text":"rank_result"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":23,"column":34},"end":{"row":23,"column":45}},"text":"user_result"},{"action":"insertText","range":{"start":{"row":23,"column":34},"end":{"row":23,"column":45}},"text":"rank_result"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":18},"end":{"row":24,"column":22}},"text":"User"},{"action":"insertText","range":{"start":{"row":24,"column":18},"end":{"row":24,"column":19}},"text":"N"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":19},"end":{"row":24,"column":20}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":20},"end":{"row":24,"column":21}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":21},"end":{"row":24,"column":22}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":22},"end":{"row":24,"column":23}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":23},"end":{"row":24,"column":24}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":24},"end":{"row":24,"column":25}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":25},"end":{"row":24,"column":26}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":25},"end":{"row":24,"column":26}},"text":"k"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":25},"end":{"row":24,"column":26}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":26},"end":{"row":24,"column":27}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":27},"end":{"row":24,"column":28}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":28},"end":{"row":24,"column":29}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":28},"end":{"row":24,"column":29}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":20,"column":9},"end":{"row":21,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":21,"column":0},"end":{"row":21,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":21,"column":9},"end":{"row":22,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":22,"column":0},"end":{"row":22,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":20,"column":9},"end":{"row":21,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":21,"column":0},"end":{"row":21,"column":9}},"text":"         "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":21,"column":9},"end":{"row":21,"column":39}},"text":"            if(!$insertresult)"},{"action":"insertText","range":{"start":{"row":21,"column":39},"end":{"row":22,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":22,"column":0},"end":{"row":25,"column":0}},"lines":["            {","               // echo \"Error\";","                die('Error: ' . mysqli_error($con));"]},{"action":"insertText","range":{"start":{"row":25,"column":0},"end":{"row":25,"column":13}},"text":"            }"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":16},"end":{"row":21,"column":20}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":12},"end":{"row":21,"column":16}},"text":"    "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":12},"end":{"row":21,"column":13}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":21,"column":17},"end":{"row":21,"column":29}},"text":"insertresult"},{"action":"insertText","range":{"start":{"row":21,"column":17},"end":{"row":21,"column":28}},"text":"rank_result"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":28},"end":{"row":21,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1411480553955,"hash":"7ab05b79d6381efab3f45e6badddc15e49d48a24"}