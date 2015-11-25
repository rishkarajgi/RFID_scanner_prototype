import MySQLdb

# txt=open('file.txt')
# ufid=txt.read()
ufid=" 6c 96 ac 12"
# ufid=ufid.strip()
print ufid
connection=MySQLdb.connect(host="127.0.0.1",user="root",passwd="",db="studentinfo")
cursor=connection.cursor()
sql1="SELECT roll_number FROM map WHERE ufid="+"'"+str(ufid)+"'"
# print sql1
cursor.execute("""SELECT roll_number FROM map WHERE ufid=%s""",(str(ufid)))
row=cursor.fetchone()
print row[0]
roll_number=row[0]
sql2="SELECT COUNT(*) FROM mess WHERE roll_number="+str(row[0])
cursor.execute(sql2)
row=cursor.fetchone()
print row[0]

if str(row[0])=='0':
    cursor.execute("""INSERT INTO mess VALUES (%s,%s)""",(str(roll_number),0))
    connection.commit()

else:
    sql4="SELECT attendance FROM mess WHERE roll_number="+str(roll_number)
    cursor.execute(sql4)
    row=cursor.fetchone()
    attendance=row[0]+1
    print type(attendance)
    print attendance
    sql3="UPDATE mess SET attendance=%s WHERE roll_number=%s",(attendance,str(roll_number),)
    cursor.execute("""UPDATE mess SET attendance=%s WHERE roll_number=%s""",(attendance,str(roll_number),))
    connection.commit()


cursor.close()
connection.close()
