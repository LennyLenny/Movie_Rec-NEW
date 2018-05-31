#!D:\Python\python.exe
print ("Content-type:text/html\r\n\r\n")
print ()    # 空行，告诉服务器结束头部
print ('<html>')
print ('<head>')
print ('<title>match</title>')
print ('</head>')
print ('<body>')
print ('<h2>您可能会喜欢：</h2>')
print ('</body>')
print ('</html>')








import pymysql
import random
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
import numpy as np
conn = pymysql.connect(host='localhost',user='root',password='root',db='movielist')
a1 = conn.cursor()
sql ='select * from `movie_rate`;'
a1.execute(sql)
data_list = a1.fetchall()
data_arr = np.array(data_list)
# data_arr = np.delete(data_arr, 0, 1)
data_arr = np.delete(data_arr, -1, 1)
user_arr = data_arr[-1]
# print(user_arr)

a = np.array(user_arr)
index_arr = np.where(a !='0')
# print(index_arr)
# print(index_arr[0])
# print(index_arr[0][0])

col_one = data_arr[:,index_arr[0][0]]
col_two = data_arr[:,index_arr[0][1]]
col_three = data_arr[:,index_arr[0][2]]



float_col_one=[]
for n in col_one:
    float_col_one.append(float(n))
col_one = float_col_one

float_col_two=[]
for n in col_two:
    float_col_two.append(float(n))
col_two = float_col_two

float_col_three=[]
for n in col_three:
    float_col_three.append(float(n))
col_three = float_col_three


rated_arr =[]
rated_arr.append(col_one)
rated_arr.append(col_two)
rated_arr.append(col_three)
# print(rated_arr)
# print("------------")


new_rated_arr = np.array(rated_arr).T.tolist()
# print(new_rated_arr)
ppl_one_mean = np.mean(new_rated_arr[0])
ppl_two_mean = np.mean(new_rated_arr[1])
ppl_three_mean = np.mean(new_rated_arr[2])
ppl_user_mean = np.mean(new_rated_arr[3])


i=0
sum1 = 0
sum2 = 0
sum3 = 0
while(i<3):
    sum1 += (rated_arr[i][0] - ppl_one_mean)*(rated_arr[i][-1] - ppl_user_mean)
    sum2 += (rated_arr[i][1] - ppl_one_mean)*(rated_arr[i][-1] - ppl_user_mean)
    sum3 += (rated_arr[i][2] - ppl_one_mean)*(rated_arr[i][-1] - ppl_user_mean)
    i= i+1 




d_one = np.std(np.array(new_rated_arr)[0],ddof=1)
d_two = np.std(np.array(new_rated_arr)[1],ddof=1)
d_three = np.std(np.array(new_rated_arr)[2],ddof=1)
d_user = np.std(np.array(new_rated_arr)[3],ddof=1)





pValue1 = sum1/(d_one*d_user*2)
pValue2 = sum2/(d_two*d_user*2)
pValue3 = sum3/(d_three*d_user*2)


# print(pValue1)
# print(pValue2)
# print(pValue3)

pValue1 = abs(pValue1)
pValue2 = abs(pValue2)
pValue3 = abs(pValue3)

temp = [pValue1,pValue2,pValue3]
max_value = max(pValue1,pValue2,pValue3)
user_which = temp.index(max_value)+1

# print(user_which)

sql_1 = "SELECT * FROM `movie_rate` where name = 'temp'"
a1.execute(sql_1)
selected_index = a1.fetchall()

    
selected_index = list(selected_index)

for row in selected_index:
      selected_index = [0,row[0],row[1],row[2],row[3],row[4],row[5],row[6],row[7],row[8],row[9],row[10],row[11],row[12],row[13],row[14],row[15],row[16],row[17],row[18],row[19],row[20],row[21],row[22],row[23],row[24],row[25],row[26],row[27],row[28],row[29]]


target_array = np.asarray(selected_index)
target_array = np.where(target_array!=0)
target_array = list(target_array)


for i in target_array:
      target_array = i


if user_which==1:
  user_one_list = [2,11,12,13,14,15,18,19,22]
  diff = list(set(user_one_list).difference(set(target_array)))
  the_one = random.choice(diff)
  # print(the_one)


   
    
    
elif user_which==2:
  user_two_list = [2,6,7,16,20,21,23,24,25]
  diff = list(set(user_two_list).difference(set(target_array)))
  the_one = random.choice(diff)
  # print(the_one)




    
else:
  user_three_list  = [4,27,28,29,30]
  diff = list(set(user_three_list).difference(set(target_array)))
  the_one = random.choice(diff)
  # print(the_one)


 


match_list = [2,'天使爱美丽',4,'藏龙卧虎',6,'霸王别姬',7,'末代皇帝',11,'与summer的500天',12,'一天',13,'k歌情人',14,'爱你罗西',15,'牛仔裤的夏天',16,'恐怖游轮',18,'怦然心动',19,'闰年',20,'禁闭岛',21,'断背山',22,'不能说的秘密',23,'窃听风暴',24,'杀人回忆',25,'熔炉',27,'千与千寻',28,'魔女宅急便',29,'环太平洋',30,'美少女特工队']
name_index = match_list.index(the_one)+1
movie_name = match_list[name_index]
print(movie_name)
the_one = str(the_one)
movie_card = mpimg.imread(the_one +'.png') # 读取和代码处于同一目录下的 lena.png
# 此时 movie_card 就已经是一个 np.array 了，可以对它进行任意处理
movie_card.shape #(512, 512, 3)

plt.imshow(movie_card) # 显示图片
plt.axis('off') # 不显示坐标轴
plt.show()




    


