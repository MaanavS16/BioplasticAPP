# MatPlotlib
import matplotlib.pyplot as plt
import sys

datafile = open("conf.txt", "r")
filestr = datafile.read()

arrX, arrY = filestr.split("_")
arrX_Weight = list(map(int, arrX.split("|")))
arrY_Elongation = list(map(int, arrY.split("|")))

'''
#Glycerin Light
arrX_Weight = [150, 300, 450, 600, 750, 900]
arrY_Elongation = [.008, .008033333, .0007, .00695, .00592, .00555555555]



#Glycerin Heavy
arrX_Weight = [150, 300, 450, 600, 750, 900]
arrY_Elongation = [1300,  ]
'''

#Manual LSRL method
xbar = 0
ybar = 0
for i in range(len(arrX_Weight)):
    xbar += arrX_Weight[i]
    ybar += arrY_Elongation[i]
xbar = (xbar / len(arrX_Weight))
ybar = (ybar / len(arrY_Elongation))
#print(xbar, ybar)
b1p1 = 0
b1p12 = 0
for i in range(len(arrX_Weight)):
    b1p1 += (arrX_Weight[int(i)] - xbar) * (arrY_Elongation[int(i)] - ybar)
    b1p12 += ((arrX_Weight[int(i)] - xbar) ** 2)
slope = (b1p1)/(b1p12)
intercept = ybar - (slope*xbar)

#Library Method
#slope, intercept, r_value, p_value, std_err = stats.linregress(arrX_Weight, arrY_Elongation)

print(slope, intercept)


arrYs = []
for i in arrX_Weight:
    arrYs.append((slope*i) + intercept)
plt.plot(arrX_Weight, arrYs)
plt.scatter(arrX_Weight, arrY_Elongation)
plt.grid(True)
plt.xlabel("Weight in grams")
plt.ylabel("Flexibility in μm elongation per gram")
plt.title("Plastic Weight vs Flexibility Regression")
plt.savefig("graph.png")

#missingoption = str(input())
#cost = int(input())
#weight = int(input())
