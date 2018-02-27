#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据分类处理
# written by MajestyLee 2017/4/8
import sys
import csv
reload(sys)
sys.setdefaultencoding('utf-8')
from numpy import *
x_file_names = ['x_chr1','x_chr2','x_chr3','x_chr4','x_chr5','x_chr6','x_chr7',
	'x_chr8','x_chr9','x_chr10','x_chr11','x_chr12','x_chr13','x_chr14','x_chr15',
	'x_chr16','x_chr17','x_chr18','x_chr19','x_chr20','x_chr21','x_chr22','x_chr23','x_chr24'] #total data
or_file_names = ['or_chr2','or_chr3','or_chr4','or_chr5','or_chr6','or_chr7',
	'or_chr8','or_chr9','or_chr10','or_chr11','or_chr12','or_chr13','or_chr14','or_chr15',
	'or_chr16','or_chr17','or_chr18','or_chr19','or_chr20','or_chr21','or_chr22','or_chr23','or_chr24'] #total data
c1 = [11, 13, 17, 7, 8, 9]
c2 = [31, 33, 37, 27, 28, 29]
c3 = [56, 58, 63, 52, 53, 54]
c4 = [80, 82, 85, 76, 77, 78]
c5 = [100, 102, 105, 96, 97, 98]
c = [c1,c2,c3,c4,c5]
org = [[2, 3, 4, 5, 6, 7], [13, 14, 15, 16, 17, 18], [19, 20, 21, 22, 23, 24], [25, 26, 27, 28, 29, 30], [31, 32, 33, 34, 35, 36], [37, 38, 39, 40, 41, 42], [43, 44, 45, 46, 47, 48], [49, 50, 51, 52, 53, 54], [55, 56, 57, 58, 59, 60], [61, 62, 63, 64, 65, 66], [67, 68, 69, 70, 71, 72], [73, 74, 75, 76, 77, 78], [79, 80, 81, 82, 83, 84], [85, 86, 87, 88, 89, 90], [91, 92, 93, 94, 95, 96]]
for i in range(23):
	file_name1 = x_file_names[i+1]
	file_name2 = or_file_names[i]
	file_name = "mix_chr" + str(i+2)
	file_name_x = "x_chr/" + file_name1 + ".txt"
	file_name_or = "or_chr/" + file_name2 + ".txt"
	for j in range(6):
		file1 = open(file_name_x)
		file2 = open(file_name_or)
		file_name3 = "chr/" + file_name1 + "_m" + str(j+1) + ".txt"
		file_name4 = "chr/" + file_name2 + "_m" + str(j+1) + ".txt"
		file_name5 = "chr/" + file_name + "_m" + str(j+1) + ".txt"
		file3 = open(file_name3,'w')
		file4 = open(file_name4,'w')
		file5 = open(file_name5,'w')
		while True:
			line = file1.readline()
			if not line:
				break
			L1 = line.split()
			str_final1 = L1[0] + " " + L1[c[0][j]] + " " + L1[c[1][j]] + " " + L1[c[2][j]] + " " + L1[c[3][j]] + " " + L1[c[4][j]] + "\n"
			file3.write(str_final1)
			line1 = file2.readline()
			if not line1:
				break
			L = line1.split()
			str_final2 = L[0] + " " + L[org[0][j]] + " " + L[org[1][j]] + " " + L[org[2][j]] + " " + L[org[3][j]] + " " + L[org[4][j]] + " " + L[org[5][j]] + " " + L[org[6][j]] + " " + L[org[7][j]] + " " + L[org[8][j]] + " " + L[org[9][j]] + " " + L[org[10][j]] + " " + L[org[11][j]] + " " + L[org[12][j]] + " " + L[org[13][j]] + " " + L[org[14][j]] + "\n"
			print str_final2
			file4.write(str_final2)
			str_final3 = L[0] + " " + L1[c[0][j]] + " " + L1[c[1][j]] + " " + L1[c[2][j]] + " " + L1[c[3][j]] + " " + L1[c[4][j]] + " " + L[org[0][j]] + " " + L[org[1][j]] + " " + L[org[2][j]] + " " + L[org[3][j]] + " " + L[org[4][j]] + "\n"
			file5.write(str_final3)
		file3.close()
		file4.close()
		file5.close()
		file1.close()
		file2.close()

